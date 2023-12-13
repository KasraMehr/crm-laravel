@extends('layouts.app')

@section('content')

<div class="login">
    <h1>خوش آمدید</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" type="email" placeholder="email" name="email" value="{{ old('email') }}" required
            autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror


        <input id="password" type="password" placeholder="********" name="password" required
            autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <button type="submit" class="btn btn-primary btn-block btn-large">
            ورود
        </button>
    </form>
    <div style="padding-top:10px;">
        <a href="{{ route('register') }}" style="padding-top:10px">
            <button class="btn btn-primary btn-semiblock btn-medium">
                ثبت نام
            </button>
        </a>
    </div>
</div>
@endsection