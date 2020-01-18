@extends('layouts.app')
@section('content')
	<div class='container'>
		<table class="table">
		<thead>
			<th scope=''>Stall Id</th>
			<th scope=''>Total Amount</th>
		</thead>
		<tbody>
			@foreach($details as $detail)
			<tr>
				<td>{{$detail->sId}}</td>
				<td>{{$detail->total}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
@endsection