<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use Illuminate\Http\Request;
use App\Models\TabelLead;
use DB;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TabelLead::all();
        //$data = DB::select(DB::raw('SELECT id, kode_driver, nama_driver AS nama, nama_perusahaan, avg(altitude) AS altitude, MAX(time) as time FROM dbgabung group by kode_driver, nama_driver, nama_perusahaan, ID'));
        //  dd($data);
        return view('leaderboard', compact('data'));
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
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function show(Leaderboard $leaderboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaderboard $leaderboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leaderboard $leaderboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leaderboard $leaderboard)
    {
        //
    }
}
