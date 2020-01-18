<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\stalls;
use App\food;
use App\ordered_foods;
use App\total;
class OrderedFoodController extends Controller
{ 
    
    public function __construct()
    {
        $this->middleware('auth',['except'=>['create','orderedFood']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = ordered_foods::all();
        return view('orderedFood.index')->with('orders', $orders);
    }

        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $totalAmount = (int) (DB::select('select * from totals where id = ?', [1]))[0]->amount;
        $stalls = stalls::all();
        $foods = food::all();
        $data = array($stalls, $foods,$totalAmount);
        
        return view('OrderedFood.create')->with('data',$data);
        
        
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
            'fId'=>'required',
            'noOfOrders'=>'required',
        ]);
        
        $foodId= $request->fId;
        $orders= (int) $request->noOfOrders;
        $results = DB::select('select * from foods where fId = ?', [$foodId]);

        $price = (int) ($results[0]->price);
        $total = $price * $orders;

        //get the total amount from the database
        $totalAmount = (int) (DB::select('select * from totals where id = ?', [1]))[0]->amount;
        //update total amount in local variable
        $totalAmount = $totalAmount + $total;

        //update the amount in the database
        $amount = total::find(1);
        $amount->amount = $totalAmount;
        $amount->save(); 



        $order = new ordered_foods;
        $order->sId = $request->input('sId');
        $order->fId = $request->input('fId');
        $order->noOfOrders = $request -> input('noOfOrders');
        $order->price = $price;
        $order->save();
        return redirect('/orderedFood/create')->with('success', "Added to the Database Successfully");

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
        $order = ordered_foods::find($id);
        $stalls = stalls::all();
        $foods = food::all();
        
        $data = array($order,$stalls, $foods);

        return view('orderedFood.edit')->with('data',$data);

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
        $order = ordered_foods::find($id);
        $order->sId = $request->input('sId');
        $order->fId = $request->input('fId');
        $order->noOfOrders = $request -> input('noOfOrders');
        $order->save();

        $amount = total::find(1);
        $amount->amount = 0;
        $amount->save();
        return redirect('/orderedFood/create')->with('success', "Edited Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ordered_foods::where('id',$id)->delete();
        return redirect('/orderedFood/')->with('success','Deleted Successfully');
    }

    public function reset()
    {
        $amount = total::find(1);
        $amount->amount = 0;
        $amount->save();

        return redirect('/orderedFood/create')->with('success',"Reset Successfully");

    }
}
