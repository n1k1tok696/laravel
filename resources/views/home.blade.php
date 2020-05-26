@extends('layouts.app')

@section('title-block', 'Home Page')

@section('content')
  <h1>Home</h1>
@endsection

@section('aside')
  @parent
  <p>Some new text for home page</p>
@endsection