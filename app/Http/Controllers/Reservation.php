<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservationModel;

class Reservation extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reservations = ReservationModel::latest()->paginate(5);
        return view('dashboard',compact('reservations'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function edit(ReservationModel $biodata)
    {
        return view('biodata.edit', compact('biodata'));
    }

    public function update(Request $request, ReservationModel $biodata)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        $biodata->update($request->all());
        return redirect()->route('biodata.index')->with('success', 'biodata berhasil di update');
    }

    public function destroy($id)
    {
        $data = ReservationModel::findOrFail($id);
        $data->delete();
        // dd(ReservationModel::delete());
        return redirect()->route('dashboard')->with('success', 'Biodata berhasil dihapus');
    }
}