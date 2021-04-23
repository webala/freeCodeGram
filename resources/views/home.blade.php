@extends('layouts.app')

@section('content')
<div class="container">
    @auth
    <h2>welcome {{auth()->user()->name}}</h2>   
    @endauth
</div>
@endsection
