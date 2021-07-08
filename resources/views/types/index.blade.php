@extends('layouts.appa')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h3>Admin - Types</h3>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('types.create') }}"> Create Type</a>
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
            <th>Name</th>
            <th>Desc</th>
            <th>Price</th>
            <th width="280px"class="text-center">Action</th>
        </tr>

        @foreach ($types as $type)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $type->name }}</td>
            <td>{{ $type->desc }}</td>
            <td>{{ $type->price }}</td>

            <td class="text-center">
                <form action="{{ route('types.destroy',$type->id) }}" method="POST">
 
                    <a class="btn btn-warning btn-sm" href="{{ route('types.edit',$type->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $types->links() !!}
 
@endsection