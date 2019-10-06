@extends('layouts.login')

@section('title','Reset Password')

@section('content')
    <div class="inner-container grid">
        <div class="form-img-wrapper">
            <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1569329467/chatbot/opinionbg_ylkxa8.png" alt="">
        </div>

        <div class="form-wrapper">
            <h1 class="lead">Reset Password</h1>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <input type="text"
                       id="email"
                       name="email"
                       value="{{ old('email') }}"
                       placeholder="Enter email for password reset"
                       required />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br><br>
                <button type="submit"
                        class="logindesign btn-sumbmit">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
        </div>
    </div>
@endsection
