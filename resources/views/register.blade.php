@extends('layout')

@section('title', '| Register')

@section('body')
<div class="d-flex justify-content-center ">
    <form class="text-success p-3 g-1  border border-success form-border rounded" style="height:100%;" action="register" method="post">
        @csrf
        <div class="d-flex justify-content-center">
            <img class=" " src="./assets/wallet.png" alt="wallet" width="72" height="57">
        </div>
        <h2 id="titre" class="text-center">Sign-in</h2>

        <div class="form-group">
            <label for="Username" class="col-form-label">Username:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="text" name="username" class="form-control
            @if(!empty($errors->first("username"))) is-invalid
            @else 'is-valid'
            @endif
            " id="username">
            <span class="invalid-feedback">{{ $errors->first('username')}}</span>
            <span class="valid-feedback"></span>
        </div>
        <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="email" class="form-control
            @if(!empty($errors->first('email'))) is-invalid
            @else 'is-valid'
            @endif" name="email" id="email">
            <span class="invalid-feedback">{{$errors->first('email')}}</span>
            <span class="valid-feedback" id="valid-mail"></span>
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label">Password:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="password" class="form-control
            @if(!empty($errors->first('password'))) is-invalid
            @else 'is-valid'
            @endif" name="password" id="password">
            <span class="invalid-feedback">{{$errors->first('password')}}</span>
            <span class="valid-feedback" id="valid-user"></span>
        </div>
        <div class="form-group">
            <label for="password_confirmation" class="col-form-label">Confirm Password:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="password" class="form-control
            @if(!empty($errors->first('password_confirmation'))) is-invalid
            @else 'is-valid'
            @endif" name="password_confirmation" id="password_confirmation">
            <span class="invalid-feedback">{{$errors->first('password_confirmation')}}</span>
            <span class="valid-feedback" id="valid-confirm"></span>
        </div>
        <div class="modal-footer">
            <p>Alredy have an account? <a href="/login" class="btn  btn-outline-success">Login Here</a></p>

            <button type="submit" class="btn  btn-outline-success"  id="signupBtn">Submit</button>
        </div>
    </form>
</div>

@endsection
