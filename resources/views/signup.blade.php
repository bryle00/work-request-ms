@extends('layout.main')

@section('title', 'Create an Account - CAO')

@section('content')
{{-- @guest --}}
    <div class="container">
        <form action="/user/signups" method="POST">
            @csrf
            <div class="title">CREATE ACCOUNT</div>
            <div class="input-box">
                <input type="text" name='name' placeholder="Name" required>
                @error('text')
                    <p>{{$message}}</p>
                @enderror
                <div class="underline"></div>
            </div>
            {{-- input username --}}
            <div class="input-box">
                <input type="text" name='email' placeholder="Username" required>
                @error('text')
                    <p>{{$message}}</p>
                @enderror
                <div class="underline"></div>
            </div>
            {{-- input password --}}
            <div class="input-box">
                <input type="password" name='password' placeholder="Password" required>
                <div class="underline"></div>
            </div>
            {{-- submit button --}}
            <div class="input-box">
                <input type="submit" value="Sign Up">
            </div>
        </form>
        <br>
        {{-- <a href="/user/login">
            <div class="create-account">back</div>
        </a> --}}
    </div>
{{-- @endguest --}}
@endsection