<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservationModel;

class Report extends Controller
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
        $data["checkin"] = ReservationModel::where('is_checkin',1)->get();
        $data["not_checkin"] = ReservationModel::where('is_checkin',0)->get();
        return view('report.index',$data)->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
