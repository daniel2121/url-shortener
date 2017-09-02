@extends('layouts.master')

@section('title', 'Create ShortUrl')

@section('content')
  <h2>Create a Short Url</h2>
  <form method="POST" action="/short-urls">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="usr">Long Url:</label>
      <input type="text" class="form-control" name="reference">
    </div>
    <div class="form-group">
      <label for="pwd">Any ID preference (Optional):</label>
      <input type="text" class="form-control" name="customized_id">
    </div>
    <input class="btn btn-primary" type="submit" value="Create">
  </form>
@endsection
