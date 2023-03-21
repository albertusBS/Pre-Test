@extends('layout.main')

@section('container')

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
    </div>
@endif

<div class="row justify-content-center">
    <div class="col-lg-5">
        <h2 class="mb-3 h3 fw-normal text-center">Login</h2>
        <form method="POST" action="/login">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror col-5" id="email" name="email" placeholder="name@example.com" autofocus required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control col5" id="password" name="password" placeholder="Password" required>
            </div>
                <button type="submit" class="w-100 btn btn-primary mt-3">Login</button>
            </form>
    </div>
</div>


@endsection
