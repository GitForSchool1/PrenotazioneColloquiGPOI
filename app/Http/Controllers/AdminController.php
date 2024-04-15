<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class AdminController extends Controller
    {
        public function index(){
            $viewData = [];
            $viewData['title'] = 'Admin Page';
            return view('admin.home.index')->with('viewData',$viewData);
        }

        public function show(){
            $viewData = [];
            $viewData['title'] = "Questi sono i report";
            return view('admin.report.show')->with('viewData',$viewData);
        }
    }


?>