@extends('auth.master')


@section('content')
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h2>Sign In</h2>
                        <p>Enter your email and password to login</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="email"
                               class=" col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                    </div>
                    <div class="col-12 mb-3">
                        <label for="password"
                               class="col-form-label text-md-end">{{ __('Password') }}</label>

                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="col-12 mb-4">
                        <div class="form-check form-check-primary form-check-inline">
                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                            <label class="form-check-label" for="form-check-default">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <button class="btn btn-secondary w-100">SIGN IN</button>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="">
                            <div class="seperator">
                                <hr>
                                <div class="seperator-text"><span>Or continue with</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-12">
                        <div class="mb-4">
                            <button class="btn  btn-social-login w-100 ">
                                <img src="{{asset('adminLtr/src/assets/img/google-gmail.svg')}}"
                                     alt="google.svg"
                                     class="img-fluid">
                                <span class="btn-text-inner">Google</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-sm-4 col-12">
                        <div class="mb-4">
                            <button class="btn  btn-social-login w-100">
                                <img src="{{asset('adminLtr/src/assets/img/github-icon.svg')}}" alt="github.svg"
                                     class="img-fluid">
                                <span class="btn-text-inner">Github</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-sm-4 col-12">
                        <div class="mb-4">
                            <button class="btn  btn-social-login w-100">
                                <img src="{{asset('adminLtr/src/assets/img/twitter.svg')}}" alt="twitter.svg"
                                     class="img-fluid">
                                <span class="btn-text-inner">Twitter</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text-center">
                            <p class="mb-0">Dont't have an account ?
                                <a href="{{route('register')}}"
                                   class="text-warning">Sign Up
                                </a>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </form>
@endsection
