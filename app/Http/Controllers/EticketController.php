<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Eticket;
use Carbon\Carbon;
use Auth;

class EticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = DB::table('eticket')
        ->orderBy('id', 'desc')
        ->get();
        return view ('pages.eticket.eticket', compact("ticket"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {
        $ticket = DB::table('eticket')
        ->join('user', 'user.id', '=', 'eticket.id_user')
        ->select('eticket.*', 'user.name')
        ->orderBy('id', 'desc')
        ->get();
        return view ('pages.eticket.eticket_admin', compact("ticket"));
    }
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
        DB::table('eticket')->insert([
            'date' => Carbon::now()->format('Y-m-d'),
            'time' => Carbon::now()->format('Y-m-d H:i:s'),
            'id_user' => Auth::user()->id,
            'problem' => $request->problem,
        ]);
        
        
        return redirect('/eticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
