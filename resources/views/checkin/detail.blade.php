@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
            <div class="card-header">{{ __('Check-in Detail') }}</div>

            <div class="card-body">
                @if ($success)
                    <div class="alert alert-success">
                        <p>{{ $success }}</p>
                    </div>
                @endif
    
                <div class="form-group row">
                    <label for="id" class="col-md-4 col-form-label text-md-right">Ticket ID : {{$row->id}}</label>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-md-4 col-form-label text-md-right">Email : {{$row->email}}</label>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-md-4 col-form-label text-md-right">Phone : {{$row->notelp}}</label>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-md-4 col-form-label text-md-right">Address : {{$row->address}}</label>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-md-4 col-form-label text-md-right">Check-in Date : {{date('d-m-Y',strtotime($row->updated_at))}}</label>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="/checkin" class="btn btn-success">
                            {{ __('Back') }}
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
