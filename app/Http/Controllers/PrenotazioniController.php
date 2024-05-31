<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrenotazioniController extends Controller
{
    public function addPrenotazioni(Request $request){
        $viewData = [];
        $viewData['title'] = "Il mio account";
        $viewData['subtitle'] = "Ecco le tue prenotazioni";
        $viewData['prenotazioni'] = "";
        
        return view('account.show')->with('viewData',$viewData);
    }
    public function testColloqui(){
        $viewData = [];
        $viewData['title'] = "Test";
        $viewData['subtitle'] = "Test";
        $viewData['prenotazioni'] = "";
        
        return view('workInProgressPages.creacolloquio')->with('viewData',$viewData);

    }
}
