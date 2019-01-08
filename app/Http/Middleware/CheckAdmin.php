<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{

    public function handle($request, Closure $next)
    {


        $user = Auth::user();


        if ($user->role != 2)
            return redirect('/');

            return $next($request);

            /*Проверяеи значение столбца role в БД Users и если оно не = 2, то возвращаем пользователя
            на главную страницу сайта, так как это говорит нам о том, что данный пользователь не
            является администратором*/
    }
}
