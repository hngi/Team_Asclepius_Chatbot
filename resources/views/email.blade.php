@extends('layouts.login')

@section('title','Reset Password')

@section('content')
	<div class="inner-container grid">
            <div class="form-img-wrapper">
                <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1569329467/chatbot/opinionbg_ylkxa8.png" alt="">
            </div>

            <div class="form-wrapper">
                <h1 class="lead">Reset Password</h1>
                <form method="POST">
					<input type="text" id="email" name="email" placeholder="Enter email for password reset" required /><br><br>
					<button type="submit" class="logindesign" class="btn-sumbmit">RESET PASSWORD</button>
				</form>
            </div>
@endsection