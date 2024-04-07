<?php
    namespace App\Http\Controllers;

    use App\Models\Archivio;
    
    use Illuminate\Auth\Events\Validated;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;

    class AdminArchivioController extends Controller
    {

        private function formValidate(Request $request){
            $request->validate([
                'name' => 'required|max:255',
                'surname'=>'required|max:255',
                'document'=>'required|numeric|gt:0',
                'type'=>'required|max:255',
                'email'=>'required|max:255',
            ]);
        }
        public function index(){
            $viewData = [];
            $viewData['title'] = 'Admin Page';
            $viewData['archivio'] = Archivio::all();
            return view('admin.archivio.index')->with('viewData',$viewData);
        }

        public function store(Request $request){
            $this->formValidate($request);
            $newArchivio = new Archivio();
            $newArchivio->setName($request->input('name'));
            $newArchivio->setSurname($request->input('surname'));
            $newArchivio->setDocuments($request->input('document'));
            $newArchivio->setType($request->input('type'));
            $newArchivio->setEmail($request->input('email'));

            
            $newArchivio->save();
           /* if($request->hasFile('image')){
                $this->validateImage($request,$newArchivio);
            }*/
            return back();
        }
        
        public function delete($id){
            Archivio::destroy($id);
            return back();
        }

        public function edit($id){
            $viewData = [];
            $archivio = Archivio::findOrFail($id);
            $viewData['title'] = "Modifica Archivio - ".$archivio->getName();
            $viewData['archivio'] = $archivio;

            return view('admin.archivio.edit')->with('viewData',$viewData);
        }

        public function update(Request $request, int $id){
            $this->formValidate($request);
            $oldArchivio = Archivio::findOrFail($id);
            $oldArchivio->setName($request->input('name'));
            $oldArchivio->setSurname($request->input('surname'));
            $oldArchivio->setDocuments($request->input('document'));
            $oldArchivio->setType($request->input('type'));
            $oldArchivio->setEmail($request->input('email'));

            
            $oldArchivio->save();
            
            return redirect()->route('admin.archivio.index');
        }
    
    }

?>