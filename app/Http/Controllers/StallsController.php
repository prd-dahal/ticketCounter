<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stalls;
class StallsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stalls = stalls::all();
        return view('stalls.index')->with('stalls',$stalls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stalls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'sId'=>'required',
            'nameOfOwner'=>'required',
            'companyName'=>'required',
            'companyAddress'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required',
            ]);
        $stall = new stalls;

        $stall->sId = $request->input('sId');
        $stall->nameOfOwner = $request->input('nameOfOwner');
        $stall->companyName = $request->input('companyName');
        $stall->companyAddress = $request->input('companyAddress');
        $stall->phoneNumber = $request->input('phoneNumber');
        $stall->email = $request->input('email');
        $stall->save();
        return redirect('/stalls/create')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stall = stalls::find($id);
        return view('stalls.show')->with('stall',$stall);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stall = stalls::find($id);
        return view('stalls.edit')->with('stall',$stall);
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
        $this->validate($request,[
            'sId'=>'required',
            'nameOfOwner'=>'required',
            'companyName'=>'required',
            'companyAddress'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required',
            ]);
        $stall = stalls::find($id);

        $stall->sId = $request->input('sId');
        $stall->nameOfOwner = $request->input('nameOfOwner');
        $stall->companyName = $request->input('companyName');
        $stall->companyAddress = $request->input('companyAddress');
        $stall->phoneNumber = $request->input('phoneNumber');
        $stall->email = $request->input('email');
        $stall->save();
        return redirect('/stalls/create')->with('success','Data Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        stalls::where('id', $id)->delete();
        return redirect('/stalls')->with('success','Deleted Successfully');
    }
}
