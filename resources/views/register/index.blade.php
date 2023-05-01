@extends('layouts.main')

@section('container')

<main class="form-signin w-100 m-auto text-center form-register">
  <h1 class="h3 mb-3 fw-normal">REGISTER</h1>
  <form action="/register" method="POST">
    @csrf
    <div class="form-floating">
      <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{ old('name') }}" required>
      <label for="name">Nama</label>
    </div>

    <div class="form-floating">
      <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required>
      <label for="username">Username</label>
    </div>
    
    <div class="form-floating">
      <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" value="{{ old('email') }}" required>
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    
    <small class="d-block text-center mt-3">You have account?<a href="/login"> Login</a></small>

  </form>
</main>

@endsection
