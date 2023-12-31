@extends('auth.layouts.master')

@section('title', 'Login')

@section('content')
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="" class="logo d-flex align-items-center w-auto">
                                <img src="" alt="">
                                <span class="d-none d-lg-block">Ilglobal</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">{{ __('home.Login to Your Account') }}</h5>
                                    <p class="text-center small">{{ __('home.Enter your email & password to login') }}</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate action="{{route('auth.login')}}"
                                      method="post">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="email" name="email" class="form-control" id="yourUsername"
                                                   required>
                                            <div class="invalid-feedback">{{ __('home.Please enter your email.') }}</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">{{ __('home.Password') }}</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword"
                                               required>
                                        <div class="invalid-feedback">{{ __('home.Please enter your password!') }}</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true"
                                                   id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">{{ __('home.Remember me') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">{{ __('home.Login') }}</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">{{ __('home.Do not have account?') }} <a
                                                    href="{{route('process.register')}}">{{ __('home.Create an account') }}</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection