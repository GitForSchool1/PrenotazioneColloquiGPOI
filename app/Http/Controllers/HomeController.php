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
            $viewData['title'] = "ABOUT";
            $viewData['subtitle'] = "Progetto di GPOI per la gestione dei colloqui";
            $viewData['description'] = "Quest'app è stata sviluppata da 6 studenti dell'itis";
            $viewData['author'] = "Puzzo, Tunaru, Pallara, Manassero, Stanciu, Mullace";
            return view('home.about')->with('viewData',$viewData);
        }
    }
?>