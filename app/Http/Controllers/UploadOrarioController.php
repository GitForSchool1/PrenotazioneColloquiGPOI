<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadOrarioController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Il mio account";
        $viewData['subtitle'] = "Ecco le tue prenotazioni";
        $viewData['prenotazioni'] = "";
        
        return view('uploadOrario.index')->with('viewData',$viewData);
    }
}
