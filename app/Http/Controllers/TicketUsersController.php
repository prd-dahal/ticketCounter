<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ticketUser;
class TicketUsersController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('auth',['except'=>['create','index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = ticketUser::all();
        return view('ticketUser.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('ticketUser.create');
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
            'tId'=>'required',
            'fName'=>'required',
            'lName'=>'required',
            'address'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required',
            'noOfTickets'=>'required',
            'cash'=>'required'
        ]);
        $user = new ticketUser;
        
        $user->tId = $request->input('tId');
        $user->fName = $request->input('fName');
        if($request->input('mName')==null){
            $user->mName='';
        
        }
        else{
            $user->mName = $request->input('mName');
        }
        $user->lName = $request->input('lName');
        $user->address = $request->input('address');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->email = $request->input('email');
        $user->noOfTickets = $request->input('noOfTickets');
        $user->save();
        $ticketRate = 200;
        $returnMoney = $request->cash - ($request->noOfTickets * $ticketRate); 
        $message = 'Successfuly Updated Database Return Rs. '.$returnMoney;
        return redirect('ticketUser/create')->with('success',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = ticketUser::find($id);
        return view('ticketUser.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = ticketUser::find($id);
        
        return view('ticketUser.edit')->with('user',$user);
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
            'tId'=>'required',
            'fName'=>'required',
            'lName'=>'required',
            'address'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required',
            'noOfTickets'=>'required',
            'cash'=>'required'
        ]);
        
        $user = ticketUser::find($id);
        $user->tId = $request->input('tId');
        $user->fName = $request->input('fName');
        if($request->input('mName')==null){
            $user->mName='';
        
        }
        else{
            $user->mName = $request->input('mName');
        }
        $user->lName = $request->input('lName');
        $user->address = $request->input('address');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->email = $request->input('email');
        $user->noOfTickets = $request->input('noOfTickets');
        $user->save();
        $ticketRate = 200;
        $returnMoney = $request->cash - ($request->noOfTickets * $ticketRate); 
        $message = 'Successfuly Updated Database Return Rs. '.$returnMoney;
        return redirect('ticketUser/create')->with('success',$message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ticketUser::where('id',$id)->delete();
        return redirect('/ticketUser')->with('success','Deleted Successfully');
    }
}
