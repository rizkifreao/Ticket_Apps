<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservationModel;

class CheckIn extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('checkin.index');
    }

    public function checkid(Request $request)
    {
        $id = $request->input('id');
        $data = ReservationModel::find($id);
        // dd($data);
        if ($data) {
            if ($data->is_checkin == 0) {
                $data->is_checkin = 1;
                $data->save();
                return view('checkin.detail')->with('row', $data)->with('success', 'Check-in completed..');
                // return response()->json($data);
            }else{
                return redirect()->route('checkin.index')->with('error', 'Already Check-in !');
            }
        }else{
            return redirect()->route('checkin.index')->with('error', 'Data not found !');
        }

    }
}
