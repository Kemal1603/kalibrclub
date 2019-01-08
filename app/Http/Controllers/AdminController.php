<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Playgrounds;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*В каталоге посредников (Middleware) мы создали метод CHECKADMIN, который проверяет role нашего User в нашей БД Users
    это значение должно равняться = 2 и оно задается в ручную разработчиком, что бы никто другой. кроме администратора
    не смог зарегистрироваться и управлять сайтом, т.к. при первоначальной регистрации значение role нового User = 0*/


    public function index()
    {
        return view('admin');
    }


    public function albums()
    {

        $albums = Albums::all();

        return view('albums.all_albums')->with('albums', $albums);
    }


    public function store(Playgrounds $playground)
    {


        request()->validate(['title' => ['required', 'min:1', 'max:50'], 'image' => '']);
        /* Если хотим запретить создавать пустые значения в полях и хотим указать мин и макс длины создаваемых строк*/

        $data = request()->all();
        /*Передаем все инфу введенную в Playground/Create.blade.php, в переменную $data*/

        if (!empty(request()->file('image_file')))
            /*Выполняем логический оператор: Если наш запрос имеет файл image_file */
         {
            $image = Input::file('image_file');
            /*Присваиваем переменной $image файл изображения из абстрактной модели Input*/

            $filename = str_random(32) . '.' . $image->getClientOriginalExtension();
            /*Передаем переменной $filename строку из 32 случайных символов + оригинальное клиентское расширение файла изображения*/

            $path = storage_path('app/public/strikeball_img_sm/' . $filename);
            /*Переменной $path передаем путь, который генерирует функция storage_path(Путь к файлу указываем сами/.имя файла)*/

            Image::make($image)->fit(194, 129)->save($path);
            /*В абстрактной модели Image создаем изображение, состоящее из $image-> указываем размеры для сохранения->сохраняем его в $path*/

            $path = storage_path('app/public/strikeball_img/' . $filename);
            Image::make($image)->fit(1000, 600)->save($path);
           /*Делаем то же самое, что и выше, с одной лишь разницей, в первый раз мы сохраняем файл с меньшим размером в папку _img_sm,
           а во втрой раз мы сохраняем файл с большим размером в папку _img*/

            $data += ['img' => basename($filename)];
            /*К переданной ранее информации, добавляем оригинальное клиентское расширение файла изображения  getClientOriginalExtension();*/

         }


        $playground->albums->photos()->create($data);
        /*В самом начале метода public function store(Playgrounds $playground), в скобках мы передаем переменной $playground
        все, что содержит модель Playgrounds, а в данной строке мы в переменной $playground находим метод albums, этот метод
        указывает, на то, что  модель Playgrounds может содержать в себе одну модель Albums, а модель Albums в свою очередь
        содержит метод photos, что говорит о том, что  модель Albums может содержать несколько моделей Photos. В конечном итоге
        мы из модели Playgrounds добираемся до модели Photos  и создаем там файл с данными из переменной $data   */


        return redirect('/playground/' . $playground->id . '/edit');
        /*После всего проделанного, возвращаем страницу редактирования конкретной площадки, при помощи id этой площадки*/
    }


}

