<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stalls;
use App\food;
class FoodController extends Controller
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
        $foods = food::all();
        return view('food.index')->with('foods',$foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stalls = stalls::all();

        return view('food.create')->with('stalls',$stalls);
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
            'fId'=>'required',
            'sId'=>'required',
            'nameOfFood'=>'required',
            'price'=>'required'
        ]);
        
        $food = new food;
        $food->fId = $request->input('fId');
        $food->sId = $request->input('sId');
        $food->nameOfFood= $request->input('nameOfFood');
        $food->price = $request->input('price');
        $food->save();
        return redirect('/food/create')->with('success','Food Added to Database Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = food::find($id);
        return view('food.show')->with('food',$food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stalls =stalls::all();
        $food = food::find($id);
        $data = array($stalls, $food);

        return view('food.edit')->with('data',$data);
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
            'fId'=>'required',
            'sId'=>'required',
            'nameOfFood'=>'required',
            'price'=>'required'
        ]);
        
        $food = food::find($id);
        $food->fId = $request->input('fId');
        $food->sId = $request->input('sId');
        $food->nameOfFood= $request->input('nameOfFood');
        $food->price = $request->input('price');
        $food->save();
        return redirect('/food/create')->with('success','Edited Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        food::where('id',$id)->delete();
        return redirect('/food')->with('success','Data Deleted Successfully');
    }
}
