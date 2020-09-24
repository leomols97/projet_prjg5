<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use ErrorException;

class MyUserCtrl extends Controller {

    public function createUser() {
        //TODO Empty cases, change return.
        $myUser = new \App\MyUser;
        $myUser->myuser_id =  htmlentities($_POST["matricule"]);
        $myUser->pass_word =  htmlentities($_POST["pass_word"]);
        $myUser->first_name = htmlentities($_POST["first_name"]);
        $myUser->last_name = htmlentities($_POST["last_name"]);
        $myUser->is_admin =  $this->checkAdmin();
        $myUser->save();
        return redirect('/administrateur');

    }

    private function checkAdmin() {
        try {
            htmlentities($_POST["is_admin"]);
            return "1";
        } catch (ErrorException $ex) {
            return "0";
        }
    }

}
