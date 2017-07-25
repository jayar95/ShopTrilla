@extends('layouts.panel')

@section('panel-title')
    Create a Store
@endsection

@section('panel-content')
    <form method="post">
        {{ csrf_field() }}

        <label>Store Name</label>
        <input type="text" id="name" name="name" placeholder="Store Name">

        <input type="submit">
    </form>
@endsection