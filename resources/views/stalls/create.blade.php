@extends('layouts.app')
@section('content')
	<h3 style="font-family:'georgia';" class='container'>Enter the details of Stalls</h3><hr>
	<form action='/stalls' method="POST" class='container'>
		{{ csrf_field() }}
		<div class='form-group'>
			<label for='sId'>Stall Number</label>
			<input type="number" class='form-control' name="sId" id='sid' placeholder='Enter the number of Stall'>
		</div>
		<div class='form-row'>
			<div class='form-group col-md-6 '>
				<label for='nameOfOwner'>Name of the Owner</label>
				<input type="text" name="nameOfOwner" class='form-control' id='nameOfOwner' placeholder='Name of the Owner'>
			</div>
			<div class='form-group col-md-6'>
				<label for='companyName'>Name of the Company</label>
				<input type="text" name="companyName" id='companyName' class='form-control' placeholder="Name of the Company">
			</div>
		</div>
		<div class='form-group'>
				<label for='companyAddress'>Comapny's Address</label>
				<input type="text" name="companyAddress" id="companyAddress" class='form-control' placeholder='Address of the Company'>
		</div>
		<div class='form-row'>
			<div class="form-group col-md-6">
				<label for='phoneNumber'>Company's Phone Number</label>
				<input type="number" name="phoneNumber" id='phoneNumber' class='form-control' placeholder='Contact NUmber of Company'>
			</div>
			<div class='form-group col-md-6'>
				<label for='email'>Company's Contact Email</label>
				<input type="email" name="email" id='email' class='form-control' placeholder='Company Contact Email'>
			</div>
			
		</div>
		<button type='submit' class='btn btn-primary'>Submit</button>
		<a href="/stalls" class='btn btn-danger'>Back</a>
	</form>

@endsection
