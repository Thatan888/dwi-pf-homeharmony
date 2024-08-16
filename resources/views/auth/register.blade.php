@extends('layouts.auth-master')

@section('content')
<section class="h-100">
    <div class="container py-5 h-100 d-flex justify-content-center align-items-center">
        <form method="post" action="{{ route('register.perform') }}" class="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="title">Register</div>

            <div class="input-group mb-3">
                <input type="text" class="input" name="name" value="{{ old('name') }}" placeholder="Name" required="required" autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="input-group mb-3">
                <input type="text" class="input" name="fatherlastname" value="{{ old('fatherlastname') }}" placeholder="Father's Last Name" required="required" autofocus>
                @if ($errors->has('fatherlastname'))
                    <span class="text-danger text-left">{{ $errors->first('fatherlastname') }}</span>
                @endif
            </div>

            <div class="input-group mb-3">
                <input type="text" class="input" name="motherlastname" value="{{ old('motherlastname') }}" placeholder="Mother's Last Name" required="required" autofocus>
                @if ($errors->has('motherlastname'))
                    <span class="text-danger text-left">{{ $errors->first('motherlastname') }}</span>
                @endif
            </div>

            <div class="input-group mb-3">
                <input type="text" class="input" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>

            <div class="input-group mb-3">
                <input type="email" class="input" name="email" value="{{ old('email') }}" placeholder="Email address" required="required" autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="input-group mb-3">
                <input type="password" class="input" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="input-group mb-3">
                <input type="password" class="input" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <div class="pt-1 mb-4 d-flex justify-content-between">
                <button type="submit" class="button-confirm">Register</button>
            </div>
            <div class="pt-1 mb-4 d-flex justify-content-between">
                <a href="{{ route('home.index') }}" class="button-confirm">Back</a>
            </div>

            @include('auth.partials.copy')
        </form>
    </div>
</section>

<style>
    .form {
        --input-focus: #2d8cf0;
        --font-color: #323232;
        --font-color-sub: #666;
        --bg-color: #fff;
        --main-color: #323232;
        padding: 20px;
        background: lightgrey;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
        border-radius: 5px;
        border: 2px solid var(--main-color);
        box-shadow: 4px 4px var(--main-color);
        max-width: 400px; /* Reducimos el ancho del contenedor */
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
        align-items: center;
    }

    .title {
        color: var(--font-color);
        font-weight: 900;
        font-size: 20px;
        margin-bottom: 25px;
        text-align: center;
    }

    .title span {
        color: var(--font-color-sub);
        font-weight: 600;
        font-size: 17px;
    }

    .input {
        width: 100%; /* Ajustamos el ancho del input al contenedor */
        height: 40px;
        border-radius: 5px;
        border: 2px solid var(--main-color);
        background-color: var(--bg-color);
        box-shadow: 4px 4px var(--main-color);
        font-size: 15px;
        font-weight: 600;
        color: var(--font-color);
        padding: 5px 10px;
        outline: none;
    }

    .input::placeholder {
        color: var(--font-color-sub);
        opacity: 0.8;
    }

    .input:focus {
        border: 2px solid var(--input-focus);
    }

    .button-confirm {
        width: 120px;
        height: 40px;
        border-radius: 5px;
        border: 2px solid var(--main-color);
        background-color: var(--bg-color);
        box-shadow: 4px 4px var(--main-color);
        font-size: 17px;
        font-weight: 600;
        color: var(--font-color);
        cursor: pointer;
    }
</style>
@endsection
