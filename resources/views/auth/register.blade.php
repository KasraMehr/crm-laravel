@extends('layouts.app')

@section('content')


<div class="login">
    <h1>خوش آمدید</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" type="text" name="name" placeholder="نام کاربری" value="{{ old('name') }}" required
            autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="email" type="email" placeholder="email" name="email" value="{{ old('email') }}" required
            autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="password" type="password" placeholder="abc@1234" name="password" required
            autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="password-confirm" type="password" placeholder="abc@1234" name="password_confirmation" required
            autocomplete="new-password">

        <button type="submit" class="btn btn-primary btn-block btn-large">
            ثبت نام
        </button>
    </form>


</div>
</div>

@endsection