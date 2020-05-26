@extends('layouts.app')

@section('title-block', 'Dashboard Page')

@section('content')
  <h1>Dashboard page</h1>
  @foreach($data as $el)
    <div class="alert alert-info">
      <p>{{ $el->first_name }}</p>
      <p>{{ $el->last_name }}</p>
      <p>{{ $el->email }}</p>
    </div>
  @endforeach
@endsection