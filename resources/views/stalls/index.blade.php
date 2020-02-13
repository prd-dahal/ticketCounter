@extends('layouts.app')
@section('content')
	<div class="" style="margin: 5px  10px 10px 5px">
        <a href="/stalls/create" class='btn btn-primary'>Add Stalls</a>

    </div>
	<div class="">
		<table class='table'>
			<thead>
				<th scope=col>Stall Number</th>
				<th scope='col'>Name of Owner</th>
				<th scope='col'>Company's Name</th>
				<th scope='col'>Company's Address</th>
				<th scope='col'>Comapny's Contact Number</th>
				<th scope='col'>Company's Email Address</th>
				<th scope='col'>Action</th>
			</thead>
			<tbody>
				@foreach($stalls as $stall )
				<tr>
					<td><a href="/stalls/{{$stall->id}}">{{$stall->sId}}</a></td>
					<td>{{$stall->nameOfOwner}}</td>
					<td>{{$stall->companyName}}</td>
					<td>{{$stall->companyAddress}}</td>
					<td>{{$stall->phoneNumber}}</td>
					<td>{{$stall->email}}</td>
					<td><a href="/stalls/{{$stall->id}}/edit" class='btn btn-primary'>Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection