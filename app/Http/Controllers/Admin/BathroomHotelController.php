<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HotelBathrooms\CreateHotelBathroomsRequest;
use App\Http\Requests\Admin\HotelBathrooms\UpdateHotelBathroomsRequest;
use App\Models\BathroomHotel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BathroomHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $hotelBathrooms =  BathroomHotel::orderBy('id', 'desc')->paginate(10)->all();
        return view('screens.admin.hotel-bathrooms.index', compact('hotelBathrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('screens.admin.hotel-bathrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateHotelBathroomsRequest $request)
    {
        foreach ($request->sanitizeHotelBathroom() as $value) {
            BathroomHotel::create($value);
        }
        toastr('record added successfully...!');
        return redirect(route('hotel-bathrooms.index'));
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
    public function edit(BathroomHotel $hotelBathroom)
    {
        return view('screens.admin.hotel-bathrooms.edit',compact('hotelBathroom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHotelBathroomsRequest $request,BathroomHotel  $hotelBathroom)
    {
        $update = $hotelBathroom->update($request->sanitizeUpdateHotelBathroom());
        if ($update) {
            toastr('record updated successfully...!');
            return redirect(route('hotel-bathrooms.index'));
        }else {
            toastr('record not updated successfully...!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BathroomHotel $hotel_bathroom)
    {
        if ($hotel_bathroom) {
            $hotel_bathroom->delete();
            toastr('record deleted successfully...!');
            return redirect(route('hotel-bathrooms.index'));
        }
    }
}
