@extends('layouts.app')

@section('title-block', 'Login page')

@section('content')
  <h1>Login page</h1>

  @if ($errors->any())
    <div class="arert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="container">
    <form class="form-signin" method="POST" action="{{ route('signin') }}">
      <div class="alert">
        {{session('danger')}}
      </div>

      @csrf
      
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2020</p>
    </form>
  </div>
@endsection
  
