@extends('layouts.app')
@section('content')
	<h3 style="font-family:'georgia';" class='container'>Edit the details of Stalls</h3><hr>
	<form action='/stalls/{{$stall->id}}' method="POST" class='container'>
		{{ csrf_field() }}
		<div class='form-group'>
			<label for='sId'>Stall Number</label>
			<input type="number" class='form-control' name="sId" id='sId' placeholder='Enter the number of Stall' value={{$stall->sId}}>
		</div>
		<div class='form-row'>
			<div class='form-group col-md-6 '>
				<label for='nameOfOwner'>Name of the Owner</label>
				<input type="text" name="nameOfOwner" class='form-control' id='nameOfOwner' placeholder='Name of the Owner' value={{$stall->nameOfOwner}}>
			</div>
			<div class='form-group col-md-6'>
				<label for='companyName'>Name of the Company</label>
				<input type="text" name="companyName" id='companyName' class='form-control' placeholder="Name of the Company" value={{$stall->companyName}}>
			</div>
		</div>
		<div class='form-group'>
				<label for='companyAddress'>Comapny's Address</label>
				<input type="text" name="companyAddress" id="companyAddress" class='form-control' placeholder='Address of the Company' value={{$stall->companyAddress}}>
		</div>
		<div class='form-row'>
			<div class="form-group col-md-6">
				<label for='phoneNumber'>Company's Phone Number</label>
				<input type="number" name="phoneNumber" id='phoneNumber' class='form-control' placeholder='Contact NUmber of Company' value={{$stall->phoneNumber}}>
			</div>
			<div class='form-group col-md-6'>
				<label for='email'>Company's Contact Email</label>
				<input type="email" name="email" id='email' class='form-control' placeholder='Company Contact Email' value={{$stall->email}}>
			</div>
			
		</div>
		<div>
			{{method_field('PUT')}}
			<button type='submit' class='btn btn-primary'>Edit</button>
			<a href="/stalls" class='btn btn-danger'>Back</a>
		</div>
		
	</form>

@endsection
