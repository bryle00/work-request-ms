@extends('layout.main')

@section('title', 'Log In')

@section('content')
<div class="container">
    <form action="" method="GET">
        <h1>Log in as:</h1>
        <div class="input-box">
            <button class="open-button" onclick="openRequestorForm()">Requestor</button>
        </div>

        <div class="input-box">
            <button class="open-button" onclick="openCaoForm()">CAO</button>
        </div>

        <div class="input-box">
            <button class="open-button" onclick="openStaffForm()">Workstaff</button>
        </div>
    </form>
    
    {{-- account creation --}}
    <br>
    <a href="/user/signup">
        <div class="create-account">Don't have an Account?</div>
    </a>

</div>

{{-- pop up form --}}
{{-- requestor --}}
<div class="form-popup" id="requestorForm">   
    <form action='/user/login/requestor' method="POST" class="form-container">
        @csrf
        <label for="email"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Sign In</button>
        <button type="button" class="btn cancel" onclick="closeRequestorForm()">Close</button>
    </form>
</div>

{{-- CAO --}}
<div class="form-popup" id="caoForm">   
    <form action='/user/login/admin' method="POST" class="form-container">
        @csrf
        <label for="email"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Sign In</button>
        <button type="button" class="btn cancel" onclick="closeCaoForm()">Close</button>
    </form>
</div>

{{-- Workstaff--}}
<div class="form-popup" id="staffForm">   
    <form action='/user/login/staff' method="POST" class="form-container">
        @csrf
        <label for="email"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Sign In</button>
        <button type="button" class="btn cancel" onclick="closeStaffForm()">Close</button>
    </form>
</div>

@endsection