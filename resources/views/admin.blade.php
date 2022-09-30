@extends('layout.main')

@section('title', 'Admin - Dashboard')

@section('content') 
<div class="container">
    <form action="" method="GET">
        <h1>Register as:</h1>
        <div class="input-box">
            <button class="open-button" onclick="openForm1()">Requestor</button>
        </div>

        <div class="input-box">
            <button class="open-button" onclick="openForm2()">Workstaff</button>
        </div>
    </form>
</div>


{{-- pop up form --}}
{{-- requestor --}}
<div class="form-popup" id="myForm1">   
    <form action='/requestors/dashboard' method="POST" class="form-container">
        @csrf
        <label for="text"><b>Deparment Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
        
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Create Account</button>
        <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
    </form>
</div>

{{-- staff --}}
<div class="form-popup" id="myForm2">
    <form action='/staffs/dashboard' method="POST" class="form-container">
        @csrf
        <label for="text"><b>Staff Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
        
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Create Account</button>
        <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
    </form>
</div>


        {{-- logout funtcion --}}
        <br>
        @auth
            <a href="/user/logout">
                 <div class="create-account">Logout</div>
            </a>
        @endauth   
@endsection