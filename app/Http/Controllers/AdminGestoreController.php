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

        public function edit($id){
            $viewData = [];
            $user = User::findOrFail($id);
            $viewData['title'] = "Modifica Ruolo di ".$user->getName();
            $viewData['subtitle'] = "";
            $viewData['user'] = $user;
    
            return view('admin.gestore.edit')->with("viewData", $viewData);
        }
        public function update(Request $request,$id){
            $user = User::findOrFail($id);
            $viewData = [];
            $viewData['title'] = "Edit users";
            $viewData['subtitle'] = "";
            
            $user->setRole($request->input('role'));
            $user->save();

            return redirect()->route('admin.gestore.users');
        }
    }

?>