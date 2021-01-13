@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Ticket Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($reservations as $key)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $key->id }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->email }}</td>
                        <td>{{ $key->notelp }}</td>
                        <td>{{ $key->address }}</td>
                        <td>{{ $key->created_at }}</td>
                        <td>
                            <form action="{{ route('dashboard.destroy',$key->id) }}" method="POST">
            
                                <a class="btn btn-info" href="{{ route('dashboard.show',$key->id) }}">Tampil</a>
                
                                <a class="btn btn-primary" href="{{ route('dashboard.edit',$key->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
    </div>
</div>
@endsection
