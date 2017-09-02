@extends('layouts.master')

@section('title', 'Show Clicks')

@section('content')
  <h2>View Clicks</h2>
  <hr>

<table border="1" style="width:100%;">
  <thead>
    <td>id</td>
    <td>url_id</td>
    <td>User Agent</td>
    <td>IP</td>
    <td>created_at</td>
  </thead>
  @foreach ($clicks as $click)
  <tr>
    <td>{{$click->id}}</td>
    <td>{{$click->url_id}}</td>
    <td>{{$click->user_agent}}</td>
    <td>{{$click->ip}}</td>
    <td>{{$click->created_at}}</td>
  </tr>
  @endforeach
</table>

@endsection
