@extends('layout')
@section('title', '| Dashboard')
@section('body')
<div class="container-fluid">
    <div class="row">
@include('partials._sidebar')
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-bs-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>
        </div>
      </main>
    </div>
  </div>
@endsection
