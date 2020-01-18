@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="jumbotron">
                        <a href="/food" class='btn btn-primary'>Food Details</a>
                        <a href="/ticketUser" class='btn btn-primary'>Details of Ticket Buyer</a>
                        <a href="/stalls" class='btn btn-primary'>Details of Stall</a>
                        <a href="/orderedFood" class='btn btn-primary'>Details of Ordered Food</a>

                        
                    </div>
                    <div ><a href="/details" class='btn btn-primary btn-lg btn-block'> Details of Stalls</a></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
