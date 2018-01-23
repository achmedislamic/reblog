@extends('layouts.master')

@section('content')
<div class="col-md-12">
  <h1>Sign in</h1>
  <form action="/login" method="POST">
  {{ csrf_field() }}

    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>
</div>
@include('layouts.errors')
@endsection