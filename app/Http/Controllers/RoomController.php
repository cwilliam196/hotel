<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        error_log('================================ MASUK KEDALAM VIEW ROOM');
        return view('rooms.index', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        // return $doubleBed;
        
        
        $change = $request->Breakfast;
        $to = $change;
        $room = new Room;
        $room->number = $request->number;
        if ($request->Single_Bed == 'on') {
            $singleBed = 'Single Bed';
            $room->facilities = $singleBed; 
        } elseif ($request->Double_Bed == 'on') {
            $doubleBed = 'Double Bed';
            $room->facilities = $doubleBed;
        } if ($request->Breakfast == 'on') {
            $breakfast = 'Breakfast';
            $room->facilities = $breakfast;
        } elseif ($request->Breakfast == 'on') {
            $breakfast = 'Breakfast';
            $room->facilities = $breakfast; 
        } if ($request->Dinner == 'on') {
            $dinner = 'Dinner';
            $room->facilities = $dinner; 
        } elseif ($request->Dinner == 'on') {
            $dinner = 'Dinner';
            $room->facilities = $dinner; 
        }

        
        
        
        
        $room->cost = $request->cost;
        
        
        $room->save();
        return redirect('/room')->with('status', 'Data Kamar Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        // return $room;
        return view('rooms/edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        // return $request;
        if ($request->Single_Bed == 'on') {
            $singleBed = 'Single Bed';
        }
        room::where('id',$room->id)
            ->update([
                'number' => $request->number,
                'cost' => $request->cost,
                'status' => $request->status,
                'facilities' => $singleBed
                
            ]);   
        return redirect('/room')->with('status', 'Data Room Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
