<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Archivio;
    
    class AdminReportController extends Controller{
        public function show(){
            $viewData = [];
            $viewData['title'] = "Questi sono i report";
            return view('admin.report.show')->with('viewData',$viewData);
        }
        public function index()
        {
            $viewData = [];
            $viewData['title'] = "";
            return view('admin.report.show')->with('viewData',$viewData);

        }
    }

?>