<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservationModel;

class Home extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        // $data = ReservationModel::latest()->paginate(5);
        // return view('home', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
        return view('home');
    }

    public function createReservation(Request $request)
    {
            $data = $request->validate([
                'name' => 'required',
                'address' => 'required',
                'email' => 'required',
                'notelp' => 'required'
            ]);
            $results = ReservationModel::create($data);
           
            
            return redirect(route('viewTicket', $results->id));
            // return redirect('/home/viewTicket/'.$results->id,'refresh');
            
            // return view('tickets', $callback);
            // return view('tickets', ['reservation' => []]);
        // return response()->json($callback);
    }

    public function viewTicket($id="")
    {
        $callback['reservation'] = ReservationModel::where('id', $id)->first();
        if (isset($callback['reservation'])) {
            return view('tickets', $callback);
        }else{
            return "Maaf data tidak ditemukan";
        }
    }
}
