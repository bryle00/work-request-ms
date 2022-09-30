@extends('layout.main')

@section('title', 'Requestor - Dashboard')

@section('content')
<div class="container">
    <form action="" method="GET">
        <h1>Request Form</h1>
        <div class="input-box">
            <button class="open-button" onclick="openForm1()">Send Request</button>
        </div>
    </form>
</div>

{{-- pop up form --}}

<div class="form-popup" id="myForm1">   
    <form action='/user/workrequest' method="POST" class="form-container">
        @csrf
        <label for="text"><b>Requestor Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
        
        <label for="status">Priority Level</label>
        <select name="status">
            <option value="critical">Critical</option>
            <option value="important">Important</option>
            <option value="normal">Normal</option>
            <option value="low">Low</option>
        </select>
        <br>
        <br>
        <label for="text"><b>State the Issue</b></label>
        <input type="text" placeholder="What is the Problem?" name="issue" required>
        <label for="text"><b>Additional Comments</b></label>
        <input type="text" placeholder=" " name="comments" required>

        <button type="submit" class="btn">Submit Request</button>
        <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
    </form>
</div>

    @auth
        <a href="/user/logout">
             <div class="create-account">Logout</div>
        </a>
    @endauth  
    
@endsection