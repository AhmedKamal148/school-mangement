@extends('auth.master')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h2>Sign Up</h2>
                        <p>Enter your email and password to register</p>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                            <input id="name"
                                   name="name"
                                   type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}"
                                   required
                                   autocomplete="name"
                                   autofocus/>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <input id="email"
                                   type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="password" class=" col-form-label text-md-end">{{ __('Password') }}</label>
                            <input id="password"
                                   type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password"
                                   required
                                   autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="password-confirm"
                                   class=" col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm"
                                   type="password"
                                   class="form-control"
                                   name="password_confirmation"
                                   required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-check form-check-primary form-check-inline">
                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                            <label class="form-check-label" for="form-check-default">
                                I agree the
                                <a href="javascript:void(0);" class="text-primary">
                                    Terms and Conditions
                                </a>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <button class="btn btn-secondary w-100">SIGN UP</button>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="">
                            <div class="seperator">
                                <hr>
                                <div class="seperator-text">
                                    <span>Or continue with</span>
                                </div>
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
                            <p class="mb-0">Already have an account ?
                                <a href="{{route('login')}}"
                                   class="text-warning">Sign in
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
