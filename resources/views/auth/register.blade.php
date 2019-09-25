@extends('layouts.signup')

@section('content')
  <div class="inner-container grid">
            <div class="form-img-wrapper" id="image-wrapper">
                <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1569329467/chatbot/opinionbg_ylkxa8.png" alt="">
            </div>

            <div class="form-wrapper">
                <h1 class="lead">Create Account</h1>
                <form id="register">
                    <div class="form-grid">
                        <div class="form-grid1">
                            <label for="name">
                                <input type="text" name="fullname" id="fullname" placeholder="Full Name">
                                <i class="far fa-user"></i>
                            </label>

                            <label for="username">
                                <input type="text" name="username" id="username" placeholder="Username">
                                <i class="far fa-user"></i>
                            </label>

                            <label for="email">
                                <input type="email" name="email" id="email" placeholder="Email">
                                <i class="far fa-envelope"></i>
                            </label>


                        </div>
                        <div class="form-grid2">


                            <label for="tel">
                                <input type="tel" name="mobileno" id="mobileno" placeholder="Mobile Number">
                                <i class="fas fa-phone-square"></i>
                            </label>

                            <label for="password">
                                <input type="password" name="password" id="password" placeholder="Password">
                                <i class="fas fa-lock"></i>
                            </label>

                            <label for="con-password">
                                <input type="password" name="confirm_password" id="confirm_password"
                                    placeholder="Confirm Password">
                                <i class="fas fa-lock"></i>
                            </label>
                        </div>
                         <div class="form-grid2">


                            <label for="age">
                                <input type="tel" name="age" id="age" placeholder="Your Age">
                                
                            </label>

                        </div>
                    </div>
                    <div class="flex-btn">
                        <div class="signup">
                            <label for="signup">
                                  <button type="submit" class="designbtn">Sign Up</button>
                                <i class="fas fa-sign-in-alt"></i>
                            </label>

                        </div>
                    </div>
                </form>
                <div id="prompt">
                    <p>Have an account?<a class="forgot" href="{{route('login')}}">Login</a></p>
                </div>
            </div>
        </div>
@endsection
