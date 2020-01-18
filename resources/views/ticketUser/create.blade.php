@extends('layouts.app')
@section('content')
    <h3 style="font-family:'georgia';" class='container'>Enter the details of ticket Buyer</h3><hr>
    <form action="/ticketUser" method='POST' class='container'>
        <div class="form-group">
            {{ csrf_field() }}
            <label for="tId">Ticket Number</label>
            <input type="number" class="form-control" id="tId" name='tId' placeholder="Ticket Number">
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="fName">First Name</label>
                <input type="text" class="form-control" id="fName" name='fName' placeholder="First Name" value=''>
            </div>
            <div class="form-group col-md-4">
                <label for="mName">Middle Name</label>
                <input type="text" class="form-control" id="mName" name='mName' placeholder="Middle Name">
            </div>
            <div class='form-group col-md-4'>
                <label for="lName">Last Name</label>
                <input type="text" class='form-control' id='lName', name='lName', placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name='address' placeholder="Address of Buyer">
        </div>
        <div class='form-group'>
            <label for="phoneNumber">Contact Number</label>
            <input type="number" class='form-control' id='phoneNumber' name='phoneNumber' placeholder='98xxxxxxxx'>
        </div>
        <div class='form-group'>
            <label for="email">Email Address</label>
            <input type="email" class='form-control' id='email' name='email' placeholder='something@gmail.com'>
        </div>
        <div class='form-group'>
            <label for="noOfTickets">No Of Tickets</label>
            <input type="number" class='form-control' id='noOfTickets' name='noOfTickets' placeholder="Enter the number of Tickets">

        </div>
        <div class='form-group'>
            <label for="cash">Given Cash</label>
            <input type="number" class='form-control' id='cash' name='cash' placeholder='Enter the cash given by the customer'>

        </div>
  
  
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/ticketUser" class='btn btn-danger'>Details of Buyer</a>
    </form>

    
   
       
@endsection