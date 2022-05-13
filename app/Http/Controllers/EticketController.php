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
    public function admin_detail($id)
    {
        $eticket = DB::table('eticket')
        ->join('user', 'user.id', '=', 'eticket.id_user')
        ->select('eticket.*', 'user.name', 'user.section', 'user.nik')
        ->where('eticket.id', $id)
        ->first();
        
        return view('pages/eticket/eticket_admin_detail', ['eticket'=> $eticket]);
    }
    public function user_detail($id)
    {
        $eticket = DB::table('eticket')
        ->join('user', 'user.id', '=', 'eticket.id_user')
        ->select('eticket.*', 'user.name', 'user.section', 'user.nik')
        ->where('eticket.id', $id)
        ->first();
        
        return view('pages/eticket/eticket_user_detail', ['eticket'=> $eticket]);
    }
    public function admin_edit($id)
    {

        $eticket = DB::table('eticket')
        ->join('user', 'user.id', '=', 'eticket.id_user')
        ->select('eticket.*', 'user.name', 'user.section', 'user.nik')
        ->where('eticket.id', $id)
        ->first();

        $fa_k = DB::table('komputer')
        ->select('*')
        ->get();

        return view('pages/eticket/eticket_admin_edit', compact("eticket", "fa_k"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unique_ticket = Eticket::orderby('id', 'DESC')->pluck('id')->first();
        if($unique_ticket == null or $unique_ticket == "" ){
            #if table is empty
            $unique_ticket = 1;
        }
        else {
            # If table has already some data
            $unique_ticket = $unique_ticket + 1;
        }
        DB::table('eticket')->insert([
            'date' => Carbon::now()->format('Y-m-d'),
            'time' => Carbon::now()->format('Y-m-d H:i:s'),
            'id_user' => Auth::user()->id,
            'ticket_no' => 'ET'.date('Ym').$unique_ticket,
            'problem' => $request->problem,
            'status' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
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
