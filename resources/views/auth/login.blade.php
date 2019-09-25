@extends('layouts.login')

@section('content')
        <div class="inner-container grid">
            <div class="form-img-wrapper">
                <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1569329467/chatbot/opinionbg_ylkxa8.png
    " alt="">
            </div>

            <div class="form-wrapper">
                <h1 class="lead">Welcome Back</h1>
                <form id="login">
                    <div class="form-grid">
                        <div class="form-grid1">
                            <label for="username">
                                <input type="text" name="username" id="username" placeholder="Username">
                                <i class="far fa-user"></i>

                            </label>

                            <label for="password">
                                <input type="password" name="password" id="password" placeholder="Password">
                                <i class="fas fa-lock"></i>

                            </label>
                        </div>
                    </div>
                    <div class="flex-btn">
                        <div class="login">
                            <label for="login">
                                <button type="submit" class="logindesign" class="btn-sumbmit">LOGIN</button>
                                <i class="fas fa-sign-in-alt"></i>
                            </label>

                        </div>
                </form>
                <div id="prompt">
                    <p>New to Asclepius?<a class="forgot" href="{{route('register')}}">Sign Up</a></p>
                </div>
            </div>

        </div>
    </div>
@endsection
