@extends('layouts.apps')
@section('contents')
    <div class="login-right">
        <div class="login-right-wrap">
            <h1>Signup Now! @include('auth.logo')</h1>
            <p class="account-subtitle">Enter details to create your account</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Full Name <span class="login-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >
                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                    @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email <span class="login-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                    @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                     @enderror
                </div>
                {{-- insert defaults --}}
                <input type="hidden" class="image" name="image" value="photo_defaults.jpg">
                <div class="form-group local-forms">
                    <label>Role Name <span class="login-danger">*</span></label>
                    <select class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                                    <option selected disabled>Select Role Type</option>
                                    <!-- <option value="Admin">Admin</option> -->
                                    <option value="Employer">Employer</option>
                                    <option value="Employee">Employee</option>
                                    <option value="User">User</option>
                    </select>
                    @error('role_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                     @enderror
                </div>
                
                <div class="form-group">
                    <label>Password <span class="login-danger">*</span></label>
                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" >
                    
                    @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Confirm password <span class="login-danger">*</span></label>
                    <input type="password" class="form-control form-control-lg" name="password_confirmation" >
                
                </div>
                <div class=" dont-have">Already Registered? <a class="text-purple" href="{{ route('login') }}">Login</a></div>
                <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                </div>
            </form>
            <div class="login-or">
                <span class="or-line"></span>
                <span class="span-or">or</span>
            </div>
            <div class="social-login ">
                <a class="btnx" href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="/"><i class="fab fa-house">&#8594;</i></a>
            </div>
        </div>
    </div>
@endsection

