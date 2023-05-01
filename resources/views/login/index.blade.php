@extends('layouts.main')

@section('container')
    <main class="form-signin w-100 m-auto text-center">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>Please Login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @if (session()->has('failed'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Failed!</strong> Please Try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        <form action="/login" method="POST">
            @csrf

            <div class="form-floating">
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com"
                    value="{{ old('email') }}" required>
                <label for="email">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            <small class="d-block text-center mt-3">not have account?<a href="/register"> Register</a></small>
        </form>
    </main>
@endsection
