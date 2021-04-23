@extends('layouts.app')

@section('content')
<div class='text-center justify-content-center d-flex'>
    <form method='post' action='{{route('register')}}'>
        @csrf

        @error('name')
        <div class='text-danger'>
            {{$message}}
        </div>
        @enderror
        <div class='mb-4'>
            <label for='name'>Name</label>
            <input name='name' id='name' class='form-control bg-gray border rounded
            @error("name") border-danger @enderror' type='text' placeholder="Your name" value={{old('name')}} >
        </div>
        


        @error('username')
        <div class='text-danger'>
            {{$message}}
        </div>
        @enderror
        <div class='mb-4'>
            <label for='name'>Username</label>
            <input name='username' id='username' class='form-control bg-gray border rounded
            @error("username") border-danger @enderror' type='text' placeholder="username" value={{old('username')}}>
        </div>


        @error('email')
        <div class='text-danger'>
            {{$message}}
        </div>
        @enderror
        <div class='mb-4'>
            <label for='name'>Email</label>
            <input name='email' id='email' class='form-control bg-gray border rounded 
            @error("email") border-danger @enderror' type='text' placeholder="Your email" value={{old('email')}}>
        </div>


        @error('password')
        <div class='text-danger'>
            {{$message}}
        </div>
        @enderror
        <div class='mb-4'>
            <label for='name'>Password</label>
            <input name='password' id='password' class='form-control bg-gray border rounded
            @error("password") border-danger @enderror' type='password' placeholder="Password" >
        </div>


        @error('password_confirmation')
        <div class='text-danger'>
            {{$message}}
        </div>
        @enderror
        <div class='mb-4'>
            <label for='name'>Confirm Password</label>
            <input name='password_confirmation' id='password_confirmation' class='form-control bg-gray border rounded
            @error("password_confirmation") border-danger @enderror' type='password' placeholder="Confirm password" >
        </div>

        <button type='submit' class='btn btn-primary'>Register</button>
    </form>

</div>




@endsection