namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Admin;

class AdminCtrl extends Controller {

    public function adminMainPage() {
        return view('administrateur');
    }
}
