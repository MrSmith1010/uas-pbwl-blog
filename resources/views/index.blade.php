@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ __('Selamat Datang di Sistem Informasi Blog') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection