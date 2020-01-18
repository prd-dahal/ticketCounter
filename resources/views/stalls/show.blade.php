@extends('layouts.app')
@section('content')

<div class='jumbotron '>
<h4 style="font-family:'georgia';">Stalls  Details</h4><hr>
<h6><b>Id: </b>{{$stall->sId}}</h6>
<br><h6><b>Owner's Name:</b> {{$stall->nameOfOwner}} &emsp;&emsp;&emsp;&emsp; <b>Company's Name: </b>{{$stall->companyName}}</h6>
<br><h6><b> Company's Address:  </b>{{$stall->companyAddress}}</h6>
<br><h6><b>Comapny's Contact Number: </b>{{$stall->phoneNumber}}&emsp;&emsp;&emsp;&emsp; <b> Company's Email: </b>{{$stall->email}}</h6>
<form action="/stalls/{{$stall->id}}" method="POST" class='pull-right'>
    @csrf
    <button type="submit" class="btn btn-danger"> Delete</button>
    {{method_field('DELETE') }}
</form>

<a href="/stalls/{{$stall->id}}/edit" class='btn btn-primary' class='pull-right'>Edit</a>


 

@endsection