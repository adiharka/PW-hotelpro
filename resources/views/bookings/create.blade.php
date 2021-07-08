@extends('layouts.appa')
 
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Booking</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('bookings.index') }}"> Back</a>
        </div>
    </div>
</div>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
 
     <div class="row">
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="text" name="date" class="form-control" placeholder="Date">
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>From:</strong>
                <input type="text" name="from" class="form-control" placeholder="From">
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>To:</strong>
                <input type="text" name="to" class="form-control" placeholder="To">
            </div>
        </div>         -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CheckIn:</strong>
                <input type="text" name="checkin" class="form-control" placeholder="CheckIn">
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CheckOut:</strong>
                <input type="text" name="checkout" class="form-control" placeholder="CheckOut">
            </div>
        </div>              

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
 
</form>
@endsection