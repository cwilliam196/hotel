<?php

namespace App\Http\Controllers;

// use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $nama = $request->session('user_id');
        // $name = DB::table('users')->get();
        // dd($name);
        $payments = DB::table('payments')->get();
        $getAmount = $payments->pluck('amount');
        // return $getAmount;
        $user = DB::table('users')->get();
        $userCount = $user->count();
        $client = $user->where('role', false)->count();
        $room = DB::table('rooms');
        $roomSort = $room->where('status', true);
        $roomCount = $roomSort->count();
        // dd($roomCount);
        return view('dashboard/index', ['user' => $userCount, 'client' => $client, 'rooms' => $roomCount, 'payments' => $getAmount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
