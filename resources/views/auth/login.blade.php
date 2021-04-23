@extends('layouts.app')

@section('content')
<div class='text-center justify-content-center d-flex w-100'>
    <form action='{{ route("login")}}' method='post'>
        @csrf

        @if(session('status'))
            <div class='text-danger'>
                <p>{{session('status')}}</p>
            </div>
        @endif

        @error("email")
            <div class='text-danger'>
                {{$message}}
            </div>
        @enderror
        <div class='mb-4'>
            <label for='email'>Email</label>
            <input name='email' type='email' id='email' class='form-control @error("email") border-danger @enderror' placeholder="Your email" 
            value='{{ old('email')}}'>
        </div>

        @error("password")
            <div class='text-danger'>
                {{$message}}
            </div>
        @enderror
        <div>
            <label for='password'>Password</label>
            <input name='password' type='password' id='password' class='form-control @error("password") border-danger @enderror' placeholder="Your password" >
        </div>

        <div>
            <input type='checkbox' name='remember' id='remember' >
            <label for='remenmber'>Remember me</label>
        </div>

        <button class='btn btn-primary mt-3' type='submit'>Login </button>
    </form>
</div>


@endsection