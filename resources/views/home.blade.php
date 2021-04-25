@extends('layouts.app')

@section('content')
<div class="container">
    @auth
    <h2>welcome {{auth()->user()->name}}</h2>   
    @endauth

    @if ($posts->count())

    @foreach($posts as $post)

    <div>
        <img src='{{ asset($post->photo) }}' />

        <p>{{$post->caption}}</p>
    </div>

    @endforeach


    @endif
</div>
@endsection
