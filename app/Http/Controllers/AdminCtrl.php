<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminCtrl extends Controller {

    public function adminMainPage() {
        return view('administrateur');
    }
}
