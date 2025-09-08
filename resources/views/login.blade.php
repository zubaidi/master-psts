@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card shadow-lg rounded-4">
            <div class="card-header text-center bg-primary text-white">
                <h4 class="mb-0">Login</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email"
                               class="form-control"
                               id="email"
                               name="email"
                               placeholder="Enter email"
                               required>
                    </div>
                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password"
                               placeholder="Enter password"
                               required>
                    </div>
                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <!-- Submit -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <small>Belum punya akun? <a href="#">Register</a></small>
            </div>
        </div>
    </div>
</div>

@endsection
