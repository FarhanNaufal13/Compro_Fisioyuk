@extends('layouts/app')

@section('title')
    Dashboard  
@endsection

@section('content')
    <div>
    <h2 > Selamat datang {{ Auth::user()->name; }} </h2>
    </div>
@endsection