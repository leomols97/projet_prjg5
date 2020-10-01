<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCtrl extends Controller {

    public function adminMainPage(Request $request) {
        //Resets on close.
        if ($request->session()->get('is_admin') == '1')
            return view('administrateur');
        else
            return view('errorPage',
                [
                    'errorMsg' => "Tu n'as pas les permissions pour acceder cette page.",
                    'where' => "/"
                ]);
    }
}
