<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technician;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()

    {

        $this->middleware('auth');

    }

    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
        $user_email = Auth::user()->email;
         $technician = DB::table('technicians')
        //->join('technicians','complains.technician_email', '=','technicians.email')
        ->select('complains.*')
        ->where('status','=','assign')
        ->where('technician_email','=',$user_email)
        ->get();
       
       
       return view('technician.viewjobs')->with('complains',$complain);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPost(Request $request)
    {
        request()->validate(['rate' => 'required']);

        $post = Technician::find($request->email);

        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;

        $rating->user_id = auth()->user()->email;



        $post->ratings()->save($rating);



        return redirect()->route("technicians");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$post = Technician::find($id);

        //return view('Rating.create',compact('technicians'));

        return abc;
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
