<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\MyUser;

class AppCtrl extends Controller
{
    public function displayHomePage()
    {
        return view('homePage');
    }

    public function connexion()
    {
        $user_id =  htmlentities($_POST["myuser_id"]);
        $pass_word =  htmlentities($_POST["pass_word"]);
        $user = \app\MyUser::find($user_id);
        if ()
        {
            return view('administrateur');
        }
        else
        {
            return view('startPage');
        }
    }
}
