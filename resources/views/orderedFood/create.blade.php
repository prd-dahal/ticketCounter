@extends('layouts.app')
@section('content')
	<h3 style="font-family:'georgia';" class='container'>Enter the order details</h3><hr>
	<form action='/orderedFood' method="POST" class='container'>
		{{ csrf_field() }}
		<div class='form-row'>
			<div class="form-group col-md-6">
				<label for='sId'>State Number</label>
				<select class='form-control' id='sId' name='sId'>
					@foreach($data[0] as $stall)
						<option>{{$stall->sId}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for='fId'>Food Number</label>
				<select class='form-control' id='fId' name='fId'>
					@foreach($data[1] as $food)
						<option>{{$food->fId}}</option>
					@endforeach
				</select>
			</div>
		</div>
		
		<div class='form-group'>
			<label for='noOfOrders'>Number Of Orders</label>
			<input type="number" name="noOfOrders" id='noOfOrders' class='form-control' placeholder='Number of Orders'>	
		</div>
		<button type='submit' class='btn btn-primary'>Submit</button>
		<a href="/orderedFood" class='btn btn-danger'>See Order Details</a>
	</form>
	<hr>
	<h3 style="font-family:'georgia';" class='container'>Total amount is {{$data[2]}}</h3>
	<div class='container'><a href="/reset" class='btn btn-danger '>Reset</a></div>
	
@endsection