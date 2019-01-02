<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Notifications\NewcomplainNotification;

use session;

use App\Complain;

use App\Product;

use App\Type;

use App\Technician;

use App\User;
use App\RateTechnicians;


class ViewtaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user_email = Auth::user()->email;
         $complain = DB::table('complains')
        //->join('technicians','complains.technician_email', '=','technicians.email')
        ->select('complains.*')
        ->where('status','=','assign')
        ->where('technician_email','=',$user_email)
        ->get();
       
       
       return view('technician.viewjobs')->with('complains',$complain);
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
        $technician_id = DB::table('rate_technicians')->where('technician_id',$id)->exists();
        $rater_id = auth()->user()->id;
        if ($technician_id) {
            $no_of_raters = DB::table('rate_technicians')->select('no_of_raters')->where('technician_id', $id);
            $ratings = DB::table('rate_technicians')->select('no_of_raters')->where('technician_id', $id);

        }
        
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
