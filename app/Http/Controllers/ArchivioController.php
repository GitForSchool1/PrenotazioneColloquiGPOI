<?php

namespace App\Http\Controllers;

use App\Models\Archivio;
use Illuminate\Http\Request;

class ArchivioController extends Controller
{
    // Questa funzione mostra l'elenco di tutti gli archivi
    public function index(){
        $viewData = [];
        $viewData['title'] = 'Lista archivi';
        $viewData['archivi'] = Archivio::all();

        return view('archivio.index')->with('viewData',$viewData);

    }

    // Questa funzione mostra il dettaglio di un archivio
    public function show(int $id){
        $viewData = [];
        $archivio = Archivio::findOrFail($id);
        $viewData['title'] = "Dettaglio - ".$archivio->getName();
        $viewData['subtitle'] = $archivio->getName();
        $viewData['archivio'] = $archivio;

        return view('archivio.show')->with('viewData', $viewData);
    }
}

?>