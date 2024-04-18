@extends('layouts.homeApp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('is_admin_error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('is_admin_error') }}
                        </div>
                    @endif
                    <h3>Welcome to the User Dashboard</h3>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
