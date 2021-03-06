@extends('layout')
@section('title','| Homepage')

@section('body')
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2015&q=80" 
        class="d-block mx-lg-auto img-fluid rounded "    alt="Bootstrap Themes" width="700" height="500" loading="lazy"></div>
      <div class="col-lg-6">
        <h1 class="text-success display-5 fw-bold lh-1 mb-3">The best way to manage your home finance</h1>
 
        <p class="lead">Regain control of your finances with a single click.
          Customisable control to manage simple family accounts up to more advanced accounting controls. 
          High data protection and advanced encryption we care about your data.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="/register"><button type="button" class="btn btn-success btn-lg px-4 me-md-2">Register now</button></a>
          <a href="/features"><button type="button" class="btn btn-outline-success btn-lg px-4">Discover our service</button></a>
        </div>
      </div>
    </div>
  </div>
@endsection
