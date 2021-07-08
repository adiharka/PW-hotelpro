@extends('layouts.appa')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h3>Admin - Bookings</h3>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('bookings.create') }}"> Create Booking</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <!-- <th>Date</th>
            <th>From</th>
            <th>To</th> -->
            <th>CheckIn</th>
            <th>CheckOut</th>
            <th width="280px"class="text-center">Action</th>
        </tr>

        @foreach ($bookings as $booking)
        <tr>
            <td class="text-center">{{ ++$i }}</td>

            <!-- <td>{{ $booking->date }}</td>
            <td>{{ $booking->from }}</td>
            <td>{{ $booking->to }}</td> -->
            <td>{{ $booking->checkin }}</td>
            <td>{{ $booking->checkout }}</td>

            <td class="text-center">
                <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST">
 
                    <a class="btn btn-warning btn-sm" href="{{ route('bookings.edit',$booking->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $bookings->links() !!}
 
@endsection