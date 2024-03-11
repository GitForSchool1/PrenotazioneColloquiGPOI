<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    
    class HomeController extends Controller{
        public function index() {
            $viewData = [];
            $viewData['title'] = "Compra i tuoi franchi";
            return view('home.index')->with('viewData',$viewData);
        }
        
        public function about(){
            $viewData = [];
            $viewData['title'] = "Impara Sui Franchi";
            $viewData['subtitle'] = "IMPARA";
            $viewData['description'] = "I franchi sono il male assoluto, distruttori di mondi";
            $viewData['author'] = "Puzzo Fabio";
            return view('home.about')->with('viewData',$viewData);
        }
    }
?>