@extends('login.layouts.main')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header bg-primary text-white">
                            <h3 class="text-center font-weight-light my-4">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" type="text" placeholder="Username" autofocus required value="{{ old('username') }}" />
                                    <label for="username">Username</label>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Password" required />
                                    <label for="password">Password</label>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small">Not registered? <a class="text-decoration-none" href="{{ route('register') }}">Register Now!</a></div>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a class="text-decoration-none" href="{{ route('password.request')}}">Reset Password!</a></div>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small">Or login with:</div>
                            <div class="social-btn mt-3">
                                <a href="{{ route('login.google') }}" class="btn btn-danger btn-lg mx-1"><i class="fab fa-google me-2"></i>Login with Google</a>
                                <a href="{{ route('login.facebook') }}" class="btn btn-primary btn-lg mx-1"><i class="fab fa-facebook me-2"></i>Login with Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
