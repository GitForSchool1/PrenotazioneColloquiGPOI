<?php
    namespace App\Http\Controllers;
    
    use App\Models\Archivio;
    use Illuminate\Http\Request;

    class ArchivioController extends Controller{
        
        public function index() {
            $viewData = [];
            $viewData['title'] = 'Lista archivi';
           // $viewData['subtitle'] = 'Scegli i nostri piatti';
            $viewData['archivi'] = Archivio::all();

            return view('archivio.index')->with('viewData',$viewData);

        }
        
        public function show(int $id){
            $viewData = [];
            $archivio = Archivio::findOrFail($id);
            $viewData['title'] = "Dettaglio - ".$archivio->getName();
            $viewData['subtitle'] = $archivio->getName();
            $viewData['archivio'] = $archivio;

            return view('archvio.show')->with('viewData', $viewData);
            
        }

    }
?>