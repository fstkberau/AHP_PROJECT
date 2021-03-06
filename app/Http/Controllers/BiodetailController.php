<?php

namespace App\Http\Controllers;

use App\Models\TabelLead;
use App\Models\Coaching;
use Illuminate\Http\Request;

class BiodetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Models\TabelLead  $tabelLead
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_bio=TabelLead::where('kode_driver',$id)
                // ->take(1)   
                ->first();
        //$data_bio=TabelLead::find($id);
        $coaching = Coaching::where('NPK_Coachee', $id)->first();
        //$coaching = Coaching::all();
        // dd($coaching);
        return view('detail',compact('data_bio', 'coaching'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TabelLead  $tabelLead
     * @return \Illuminate\Http\Response
     */
    public function edit(TabelLead $tabelLead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TabelLead  $tabelLead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TabelLead $tabelLead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TabelLead  $tabelLead
     * @return \Illuminate\Http\Response
     */
    public function destroy(TabelLead $tabelLead)
    {
        //
    }
}
