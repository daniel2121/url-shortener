@extends('layouts.master')

@section('title', 'View ShortUrls')

@section('content')
  <h2>View Short Urls</h2>
  <hr>

  @foreach ($short_urls as $short_url)
    Short URL: <a href="http://localhost:8001/r/{{$short_url->url_id}}">http://localhost:8001/r/{{$short_url->url_id}}</a><br>
    Long URL: <a href="{{$short_url->reference}}">{{$short_url->reference}}</a><br>
    <hr>
  @endforeach

@endsection
