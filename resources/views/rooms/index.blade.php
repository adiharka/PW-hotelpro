@extends('layouts.appa')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h3>Admin - Rooms</h3>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create Room</a>
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
            <th>Location</th>
            <th>Type</th>
            <th>Status</th>
            <th width="280px"class="text-center">Action</th>
        </tr>

        @foreach ($rooms as $room)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $room->location }}</td>
            <td>{{ $room->type }}</td>
            <td>{{ $room->status }}</td>

            <td class="text-center">
                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
 
                    <a class="btn btn-warning btn-sm" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $rooms->links() !!}
 
@endsection