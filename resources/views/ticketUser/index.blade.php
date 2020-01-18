@extends('layouts.app')
@section('content')
    <div class ='jumbotron'>

        <a href='/ticketUser/create' class="btn btn-primary">New Ticket</a>
        
        
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Ticket Id</th>
      <th scope="col">FirstName</th>
      <th scope='col'>Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope='col'>Address</th>
      <th scope='col'>Phone Number</th>
      <th scope='col'>Email</th>
      <th scope="col">No Of Tickets</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($users as $user)
      <tr>
      <td><a href="/ticketUser/{{$user->id}}">{{$user->tId}}</a></td>
      <td>{{$user->fName}}</td>
      <td>{{$user->mName}}</td>
      <td>{{$user->lName}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->phoneNumber}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->noOfTickets}}</td>
      <td><a href="/ticketUser/{{$user->id}}/edit" class='btn btn-primary'>Edit</a></td>
      @endforeach
    </tr>
  </tbody>
</table>
@endsection