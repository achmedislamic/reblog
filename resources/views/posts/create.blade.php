@extends('layouts.master')

@section('content')
<form method="POST" action="/posts">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Publish</button>
  
  </div>
</form>
<div class='form-group'></div>
@include('layouts.errors')
@endsection