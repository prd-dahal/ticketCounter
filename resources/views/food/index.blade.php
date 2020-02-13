@extends('layouts.app')
@section('content')
        	
    
    <div class="" style="margin: 5px  10px 10px 5px">
        <a href="/food/create" class='btn btn-primary'>Add Food</a>

    </div>
    <div>
    	<table class='table'>
    		<thead>
    			<th scope='col'>Stall Number</th>
    			<th scope='col'>Food Id</th>
    			<th scope='col'>Name of Food</th>
    			<th scope='col'>Price of Each</th>
    			<th scope=col>Action</th>
    		</thead>
    		<tbody>
    			@foreach($foods as $food)
    			<tr>
    				<td><a href="/food/{{$food->id}}">{{$food->sId}}</a></td>
    				<td>{{$food->fId}}</td>
    				<td>{{$food->nameOfFood}}</td>
    				<td>{{$food->price}}</td>
    				<td><a href="/food/{{$food->id}}/edit" class='btn btn-primary'>Edit</a></td>
    			</tr>
    			@endforeach
    		</tbody>
    	</table>
    </div>
@endsection