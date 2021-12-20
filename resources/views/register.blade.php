@extends('layout')

@section('title', 'Register')

@section('body')
<div class="d-flex justify-content-center ">
    <form class="bg-success text-light p-3 g-1  form-border rounded" style="height:100%;" action="register" method="post">
        <div class="d-flex justify-content-center">
            <img class=" " src="./assets/wallet.png" alt="wallet" width="72" height="57">
        </div>
        <h2 id="titre" class="text-center">Register</h2>
        <div class="form-group">
            <label for="Username" class="col-form-label">Username:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="text" name="Username" class="form-control" id="username">
            <span class="invalid-feedback"></span>
            <span class="valid-feedback" id="valid-user"></span>
        </div>
        <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="email" class="form-control" name="Email" id="email"></input>
            <span class="invalid-feedback"></span>
            <span class="valid-feedback" id="valid-mail"></span>
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label">Password:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="password" class="form-control" name="Password" id="password"></input>
            <span class="invalid-feedback"></span>
            <span class="valid-feedback" id="valid-user"></span>
        </div>
        <div class="form-group">
            <label for="confirm_password" class="col-form-label">Confirm Password:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="password" class="form-control" name="confirm_Password" id="confirm_password"></input>
            <span class="invalid-feedback"></span>
            <span class="valid-feedback" id="valid-confirm"></span>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-form-label">Firstname:</label>
            <input type="text" class="form-control" 
            name="FirstName" id="firstname"></input>
            <span class="invalid-feedback"></span>
            <span class="valid-feedback" id="valid-confirm"></span>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-form-label">Lastname:</label>
            <input type="text" class="form-control" 
            name="LastName" id="lastname"></input>
            <span class="invalid-feedback"></span>
            <span class="valid-feedback" id="valid-confirm"></span>
        
        </div>
        <div class="modal-footer">
            <p>Alredy have an account? <a href="/login" class="no-style"><button class="btn btn-light btn-outline-success">Login Here</button></a></p>
           
            <button type="submit" class="btn btn-light btn-outline-success"  id="signupBtn">Submit</button>
        </div>
    </form>
</div>

@endsection