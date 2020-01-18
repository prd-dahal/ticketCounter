@extends('layouts.app')
@section('content')
<h3 style="font-family:'georgia';" class='container'>Edit the food details</h3><hr>
	<form action='/food/{{$data[1]->id}}' method='POST' class='container'>
		{{ csrf_field() }}
		<div class="form-group">
      		<label for="sId">Select the stall Id</label>
      		<select class="form-control" id='sId' name='sId' value={{$data[1]->sId}}>
        		@foreach($data[0] as $stall)
        		<option>{{$stall->sId}}</option>
		        @endforeach
		     </select>

		<div class='form-group'>
			<label for='fId'>Food Id</label>
			<input type="number" name="fId" id='fId' class='form-control' placeholder='Id of the Food' value={{$data[1]->fId}}>
		</div>
		<div class='form-row'>
			<div class='form-group col-md-6'>
				<label for=nameOfFood>Name of the Food</label>
				<input type="text" name="nameOfFood" id='nameOfFood' class='form-control' placeholder='Name of the Food' value={{$data[1]->nameOfFood}}>
			</div>
			<div class='form group col-md-6'>
				<label for='price'>Price of Each Food</label>
				<input type="number" name="price" id='price' class='form-control' placeholder="Price of Food" value={{$data[1]->price}}>
			</div>
		</div>
		<div>
			{{method_field('PUT')}}
			<button type='submit' class='btn btn-primary'>Submit</button>

		<a href="/food/" class='btn btn-danger'>Back</a>
		</div>
		
	</form>
@endsection