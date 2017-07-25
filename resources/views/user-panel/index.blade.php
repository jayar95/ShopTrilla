@extends('layouts.panel')

@section('panel-title')
    User Panel
@endsection

@section('panel-content')
    <a href="{{ route('vendor.application') }}">Apply to be a vendor</a><br />
    <a href="{{ route('store.create.view') }}">Create a store</a>
@endsection