@extends('layout.main')

@section('title', 'Requestor - Dashboard')

@section('content')

    <h1>HOLA</h1>   
    {{-- logout funtcion --}}
    <br>
    @auth
        <a href="/user/logout">
             <div class="create-account">Logout</div>
        </a>
    @endauth  
    
@endsection