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
            return view('admin.archivio.store');
        }
        
        public function delete($id){
            Archivio::destroy($id);
            return back();
        }

        public function show(){
            $viewData = [];
            return view('admin.report.show')->with('viewData',$viewData);
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
            
            return back();
        }
    
    }

?>