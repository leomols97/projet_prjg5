<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminCtrl extends Controller {

    public function adminMainPage() {
        return view('administrateur');
    }


    public function addStudent() {
        $student = new \App\Student;
        $student->stu_id =  htmlentities($_POST["matricule"]);
        $student->pass_word =  htmlentities($_POST["pass_word"]);
        $student->first_name = htmlentities($_POST["first_name"]);
        $student->last_name = htmlentities($_POST["last_name"]);
        $student->save();
    }

    public function addProduct() {

    }
}
