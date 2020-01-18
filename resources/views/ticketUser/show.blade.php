@extends('layouts.app')
@section('content')

<div class='jumbotron '>
<h4 style="font-family:'georgia';">Ticket Buyer's Details</h4><hr>
<h6><b>Id: </b>{{$user->tId}}</h6>
<br><h6><b>First Name:</b> {{$user->fName}} &emsp;&emsp;&emsp;&emsp; <b>Middle Name: </b>{{$user->mName}} &emsp;&emsp;&emsp;&emsp; <b>Last Name: </b>{{$user->lName}}</h6>
<br><h6><b>Address:  </b>{{$user->address}}</h6>
<br><h6><b>Phone Number: </b>{{$user->phoneNumber}}&emsp;&emsp;&emsp;&emsp; <b>Email: </b>{{$user->email}}</h6>
<br><h6><b>No of Tickets: </b>{{$user->noOfTickets}}</h6>
<form action="/ticketUser/{{$user->id}}" method="POST" class='pull-right'>
    @csrf
    <button type="submit" class="btn btn-danger"> Delete</button>
    {{method_field('DELETE') }}
</form>

<a href="/ticketUser/{{$user->id}}/edit" class='btn btn-primary' class='pull-right'>Edit</a>


 

@endsection