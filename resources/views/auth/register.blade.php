@extends('layouts.auth-master')

@section('content')
<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                alt="Sample photo" class="img-fluid"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Register</h3>

                                <form method="post" action="{{ route('register.perform') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required="required" autofocus>
                                        <label for="floatingName">Name</label>
                                        @if ($errors->has('name'))
                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="fatherlastname" value="{{ old('fatherlastname') }}" placeholder="Father´s Last Name" required="required" autofocus>
                                        <label for="floatingName">Father´s Last Name</label>
                                        @if ($errors->has('fatherlastname'))
                                            <span class="text-danger text-left">{{ $errors->first('fatherlastname') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="motherlastname" value="{{ old('motherlastname') }}" placeholder="Mother Last Name" required="required" autofocus>
                                        <label for="floatingName">Mother´s Last Name</label>
                                        @if ($errors->has('motherlastname'))
                                            <span class="text-danger text-left">{{ $errors->first('motherlastname') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                        <label for="floatingName">Username</label>
                                        @if ($errors->has('username'))
                                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group form-floating mb-3">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                                        <label for="floatingEmail">Email address</label>
                                        @if ($errors->has('email'))
                                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group form-floating mb-3">
                                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                        <label for="floatingPassword">Password</label>
                                        @if ($errors->has('password'))
                                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group form-floating mb-3">
                                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                                        <label for="floatingConfirmPassword">Confirm Password</label>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button type="submit" class="btn btn-warning btn-lg ms-2">Register</button>
                                        <a href="{{ route('home.index') }}" class="btn btn-secondary btn-lg ms-2">Back</a>
                                    </div>

                                    @include('auth.partials.copy')
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
