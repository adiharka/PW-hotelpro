@extends('layouts.appa')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Booking</h2>
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
 
    <form action="{{ route('bookings.update',$booking->id) }}" method="POST">
        @csrf
        @method('PUT')
 
         <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="text" name="date" value="{{ $booking->date }}" class="form-control" placeholder="Date">
                </div>
            </div>        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>From:</strong>
                    <input type="text" name="from" value="{{ $booking->from }}" class="form-control" placeholder="From">
                </div>
            </div>        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>To:</strong>
                    <input type="text" name="to" value="{{ $booking->to }}" class="form-control" placeholder="To">
                </div>
            </div>         -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CheckIn:</strong>
                    <input type="text" name="checkin" value="{{ $booking->checkin }}" class="form-control" placeholder="CheckIn">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CheckOut:</strong>
                    <input type="text" name="checkout" value="{{ $booking->checkout }}" class="form-control" placeholder="CheckOut">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
 
    </form>
@endsection