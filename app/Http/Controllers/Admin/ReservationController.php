<?php

namespace App\Http\Controllers\Admin;
use App\Models\reservation;
use App\Models\Table;
use App\Enums\TableStatus;
use App\Http\Requests\ReservationStoreRequest;
use Carbon\Carbon;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reservations = reservation::all();
        return view("admin.reservations.index",compact("reservations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tables = Table::where('status', TableStatus::avaliable)->get();
        return view('admin.reservations.create', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $request)
    {
        //
        
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table['guest Number']) {
            return back()->with('warning', 'Please choose the table base on guests.');
        }
        // $request_date = Carbon::parse($request->res_date);
        // foreach ($table->reservations as $res) {
        //     if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
        //         return back()->with('warning', 'This table is reserved for this date.');
        //     }
        
       
       Reservation::create([
            'first_name' =>$request->first_name,
            'last_name'=> $request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
             'res_date'=> $request->res_date,
             'guest_number'=> $request->guest_number,
             'table_id'=> $request->table_id,
        ]);
        return to_route('admin.reservation.index')->with('success', 'Reservation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
