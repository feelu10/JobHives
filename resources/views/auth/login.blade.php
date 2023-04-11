@extends('layouts.apps')
@section('contents')
{{-- message --}}
{!! Toastr::message() !!}
<div class="login-right">
    <div class="login-right-wrap">
        <h1>Welcome to @include('auth.logo') Dashbord</h1>
        <p class="account-subtitle">Need an account? <a class="text-purple" href="{{ route('register') }}">Sign Up</a></p>
        <h2>Sign in</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email<span class="login-danger">*</span></label>
                <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Password <span class="login-danger"></span></label>
                <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="forgotpass">
                <div class="remember-me">
                <input class="form-check-input me-2" type="checkbox" value="remember_me" id="remember_me" name="remember_me">Remember Me </label>
                </div>
                <a class="text-purple" href="forget-password">Forgot Password?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
        </form>
        <div class="login-or">
            <span class="or-line"></span>
            <span class="span-or">or</span>
        </div>
        <div class="social-login">
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="/"><i class="fab fa-house">&#8594;</i></a>
        </div>
    </div>
</div>

@endsection



