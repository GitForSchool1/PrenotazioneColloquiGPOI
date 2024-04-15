<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Archivio;
    
    class AdminReportController extends Controller{
        public function index()

        {

            $reports = Archivio::all();


            return view('report.index', compact('reports'));

        }
    }

?>