@extends('layouts.app')

@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-6">

             <form action="/news" method="post" enctype="multipart/form-data">


                 @csrf


                 <div class="form-group">
                     <h3>Страница создания новостей</h3>
                     <label for="title">Заголовок</label>
                     <input type="text" class="form-control  {{$errors->has('title')?'alert-danger':''}}" name="title" id="title"
                            {{--required--}} value="{{old('title')}}">
                     @if ($errors->has('title'))
                         <strong>{{ $errors->first('title') }}</strong>
                     @endif
                     {{--Имя инпута (naeme) и название атрибута for, тега Label, должны совпадать
                         иначе принимаемые значения потом не получается изменить. Тэг required
                         требуется для того, что бы при вводн пустых строк, ничего не сохранялось
                         value="{{old('title')}} При помощи значений этого тега, мы сохраняем введенные значения в поле "Заголовок" ,
                         то есть, если ввести 2 буквы, а мы установили минимум 3, то при редиректе, ничего не сотрется, введенные данные останутся--}}

                 </div>


                 <div class="form-group">
                     <label for="body">Текст Статьи</label>
                     <textarea type="text" class="form-control {{$errors->has('body')?'alert-danger':''}}" name="body" id="body" spellcheck rows="10" ></textarea>
                 </div>
                 @if ($errors->has('body'))

                     <strong>{{ $errors->first('body') }}</strong>

                 @endif


                 <div class="custom-file">
                     <input type="file" class="custom-file-input" id="customFile" name="image_file">
                     <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>

                 <div class="form-group">
                     <button type="submit" class="btn btn-secondary">Создать Статью</button>

                 </div>




             </form>


         </div>
     </div>
 </div>


@endsection