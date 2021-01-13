@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
            <div class="card-header">{{ __('Form Check-in') }}</div>

            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form action="{{route('checkid')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Ticket ID :') }}</label>

                        <div class="col-md-6">
                            <input id="id" type="number" class="form-control" name="id" placeholder="Input Ticket ID"required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Check-in') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
