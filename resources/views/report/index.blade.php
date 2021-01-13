@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
            <div class="card-header">{{ __('Report') }}</div>

            <div class="card-body">
               <h3>Total Check-in : {{count($checkin)}}</h3>
              <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Ticket Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date</th>
                </tr>
                @foreach ($checkin as $key)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $key->id }}</td>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->email }}</td>
                    <td>{{ $key->notelp }}</td>
                    <td>{{ $key->address }}</td>
                    <td>{{ $key->created_at }}</td>
                </tr>
                @endforeach
            </table>

            <h3>Total Already Check-in : {{count($not_checkin)}}</h3>
            <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Ticket Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date</th>
                    </tr>
                    @foreach ($not_checkin as $key)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $key->id }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->email }}</td>
                        <td>{{ $key->notelp }}</td>
                        <td>{{ $key->address }}</td>
                        <td>{{ $key->created_at }}</td>
                    </tr>
                    @endforeach
                </table>
                
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
