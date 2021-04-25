@extends('layouts.app')

@section('content')
<div class='text-center justify-content-center d-flex'>

    @if($errors->any())
    <div class='text-danger'>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


    @if(session('status'))
    <div class='text-muted text-primary'>
        {{session('status')}}
    </div>

    @endif


    <div class='mb-4'>
        <h2>Post something</h2>
    </div>
    <div class='mt-2'>
        <form action='' method='post' class='form' enctype='multipart/form-data'>
            @csrf
            <div class='mb-2'>
                <label for='file'></label>
                <input type='file' name='image' id='image' class='form-control' value='{{ old('image')}}'>
            </div>

            <div class='mb-2'>
                <label for='caption'></label>
                <input type='text' name='caption' id='caption' class='form-control' value='{{ old('caption')}}'>
            </div>
            
            <button type='submit' class='btn btn-primery'>Post</button>
        </form>
    </div>
</div>



@endsection