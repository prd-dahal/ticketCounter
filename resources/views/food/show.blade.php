@extends('layouts.app')
@section('content')


<div class='jumbotron '>
<h4 style="font-family:'georgia';">Food  Details</h4><hr>
<h6><b>Food Id: </b>{{$food->fId}}</h6>
<br><h6><b>Stall Number:</b> {{$food->sId}} &emsp;&emsp;&emsp;&emsp; <b>Food's Name: </b>{{$food->nameOfFood}}</h6>
<br><h6><b> Price of Each Food:  </b>{{$food->price}}</h6>
<form action="/food/{{$food->id}}" method="POST" class='pull-right'>
    @csrf
    <button type="submit" class="btn btn-danger"> Delete</button>
    {{method_field('DELETE') }}
</form>

<a href="/food/{{$food->id}}/edit" class='btn btn-primary' class='pull-right'>Edit</a>


 

@endsection
