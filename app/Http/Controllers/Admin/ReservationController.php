<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Rules\DateBetween;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Menu; // Import the Category model
use Carbon\Carbon;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();

        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = menu::all(); // Retrieve all categories
        return view('admin.reservations.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $request)
    {
        $request->validate([
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required',
            'tel_number'=> 'required',
            'birth_date'=> 'required',
            'post'=> 'required',
            'town'=> 'required',
            'codepostal'=> 'required',
            'res_date'=> 'required',
            'menu_id'=> 'required',
        ]);
        $request_date = Carbon::parse($request->res_date);

        // Check for existing reservations with the same date and time
        $existingReservation = Reservation::where('res_date', $request_date->format('Y-m-d H:i:s'))->first();

        if ($existingReservation) {
            return redirect()->back()->with('warning', 'There is a reservation at the same date and time choose another time or date');
        }
            Reservation::create([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'email'=> $request->email,
            'tel_number'=> $request->tel_number,
            'birth_date'=> $request->birth_date,
            'post'=> $request->post,
            'town'=> $request->town,
            'codepostal'=> $request->codepostal,
            'res_date'=> $request->res_date,
            'menu_id'=> $request->menu_id,
        ]);


        return redirect()->route('admin.reservations.index')->with('success','Reservation created successfully ');;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
