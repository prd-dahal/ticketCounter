@extends('layouts.app')
@section('content')
	
		
	<div class="" style="margin: 5px  10px 10px 5px">
        <a href="/orderedFood/create" class='btn btn-primary'>Order Food</a>

    </div>
	<table class="table">
		<thead>
			<th scope='col'>Stall Id</th>
			<th scope='col'>Food Id</th>
			<th scope='col'>No of Orders</th>
			<th scope='col'>Edit</th>
			<th scope='col'>Delete</th>
		</thead>
		<tbody>
			
				@foreach($orders as $order)
					<tr>
					<td>{{$order->sId}}</a></td>
					<td>{{$order->fId}}</td>
					<td>{{$order->noOfOrders}}</td>
					<td><a href="/orderedFood/{{$order->id}}/edit" class="btn btn-primary">Edit</a></td>
					<td><form action='/orderedFood/{{$order->id}}' method="post">
						@csrf
						<button type='submit' class='btn btn-danger'>Delete</button>
						{{method_field('DELETE')}}
					</form></td>
					</tr>
				@endforeach
			
			
		</tbody>
	</table>
@endsection