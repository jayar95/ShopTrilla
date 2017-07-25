@extends('layouts.panel')

@section('panel-title')
    Vendor Application
@endsection

@section('panel-content')
    @if (Session::has('success'))
        <p class="alert alert-success">
            {{ Session::get('success') }}
        </p>
    @else
        <a href="{{ route('vendor.application.send') }}" class="btn btn-default">
            Send Application
        </a>
    @endif
@endsection