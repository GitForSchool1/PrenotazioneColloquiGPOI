<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    
    class AccountController extends Controller{
        public function show() {
            $viewData = [];
            $viewData['title'] = "Il mio account";
            $viewData['subtitle'] = "";
            return view('account.show')->with('viewData',$viewData);
        }
        
  
    }
?>