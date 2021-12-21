@extends('layout')
@section('title','| Homepage')

@section('body')
<div class="container " >
    <div class="row d-flex justify-content-center align-items-center" style="height: 80vh; width:auto;" >
        <div class="col col-md-6 col-lg-4 align-self-center">
                <main class="form-signin text-center p-5">
                    <form action="login" method="post">
                        @csrf
                        <img class="mb-4" src="/assets/wallet.png" alt="" width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
                    </form>
                </main>

        </div>
    </div>
</div>
@endsection()
