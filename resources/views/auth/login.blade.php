@extends('layouts.auth-master')

@section('content')
    <section class="vh-100" style="background-color: #000000;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ url('images/books-3733892_1280.jpg') }}" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="{{ route('login.perform') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        {{-- <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Logo</span>
                                        </div> --}}

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account
                                        </h5>

                                        @include('layouts.partials.messages')

                                        <div data-mdb-input-init class="form-group form-floating form-outline mb-4">
                                            <input type="text" id="form2Example17" value="{{ old('username') }}"
                                                placeholder="Username" class="form-control form-control-lg" name="username"
                                                required="required" autofocus>
                                            <label class="form-label" for="floatingName form2Example17">Email
                                                address</label>
                                            @if ($errors->has('username'))
                                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                            @endif
                                        </div>

                                        <div data-mdb-input-init class="form-group form-floating form-outline mb-4">
                                            <input type="password" class="form-control form-control-lg" name="password"
                                                value="{{ old('password') }}" placeholder="Password"
                                                required="required id="form2Example27"">
                                            <label class="form-label" for="form2Example27 floatingPassword">Password</label>
                                            @if ($errors->has('password'))
                                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                                            <a href="{{ route('home.index') }}" class="w-100 btn btn-lg mt-2 btn-secondary">Back</a>
                                        </div>
                                        @include('auth.partials.copy')
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="{{ route('register.perform') }}" style="color: #393f81;">Register
                                                here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
