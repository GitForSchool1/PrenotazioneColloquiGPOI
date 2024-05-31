<?php
    namespace App\Http\Controllers;

    use App\Models\Calendario;
    
    use Illuminate\Auth\Events\Validated;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;
    use Spatie\Calendar\Calendar;

    class CalendarController extends Controller
    {
        public function index(){
            $viewData = [];
            $viewData['title'] = "Calendar";
            $viewData['subtitle'] = "Questo e il calendario";
            $viewData['users'] = Calendario::all();
           return view('calendar.index')->with('viewData',$viewData);
        }

        public function show(){
            $viewData = [];
            return view('calendar.index')->with('viewData',$viewData);
        }
        public function prenota($id){
            $viewData = [];
            $user = Calendario::findOrFail($id);
            $viewData['title'] = "Conferma Prenotazione Colloquio docente ".$user->getNameProfessore();
            $viewData['subtitle'] = "";
            $viewData['user'] = $user;
    
            return view('calendar.prenota')->with("viewData", $viewData);
        }
        public function showAll(){
            $viewData = [];
            $viewData['title'] = "Le tue prenotazioni";
            $viewData['subtitle'] = "";
            return view('account.show')->with("viewData", $viewData);
        }
        public function uploadOrario(Request $request)
        {
            $year = $request->input('year', date('Y'));
            $month = $request->input('month', date('m'));
            $selectedDate = $request->input('date');

            // Utilizza il pacchetto per generare il calendario
            $calendar = new Calendar($year, $month);

            return view('uploadOrario.test', compact('calendar', 'selectedDate', 'year', 'month'));
        }

    
    }

?>