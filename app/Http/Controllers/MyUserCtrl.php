<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MyUserCtrl extends Controller {

    public function createStudent() {
        $student = new \App\MyUser;
        $student->myuser_id =  htmlentities($_POST["matricule"]);
        $student->pass_word =  htmlentities($_POST["pass_word"]);
        $student->first_name = htmlentities($_POST["first_name"]);
        $student->last_name = htmlentities($_POST["last_name"]);
        $student->save();
    }
}