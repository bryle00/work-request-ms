@extends('layout.main')

@section('title', 'Workstaff - Dashboard')

@section('content')
    <h1>Hello</h1>
    {{-- logout funtcion --}}
    <br>
    @auth
        <a href="/user/logout">
             <div class="create-account">Logout</div>
        </a>
    @endauth  
@endsection