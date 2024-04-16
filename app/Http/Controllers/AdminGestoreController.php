<?php
    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;
    use App\Models\Archivio;
    class AdminGestoreController extends Controller{
        public function index()
        {
            $viewData = [];
            $viewData['title'] = "Show all users";
            $viewData['subtitle'] = "";
            $viewData['users'] = User::all();

            return view('admin.gestore.users')->with('viewData',$viewData);
        }
    }

?>