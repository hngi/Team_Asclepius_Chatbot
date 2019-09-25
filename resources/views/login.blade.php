<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>


<body>
    <div class="container" id="container">
        <div class="inner-container grid">
            <div class="form-img-wrapper">
                <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1569329467/chatbot/opinionbg_ylkxa8.png
    " alt="">
            </div>

            <div class="form-wrapper">
                <h1 class="lead">Welcome Back</h1>
                <form method="POST" action="">
                    {{csrf_field()}}

                    <div class="form-grid">
                        <div class="form-grid1">
                            
                            <label for="username">
                                <input type="text" name="username" id="username input" placeholder="username" required>
                                <i class="far fa-user"></i>

                            </label>

                            <label for="password">
                                <input type="password" name="password" id="password input" placeholder="Password" required>
                                <i class="fas fa-lock"></i>
                            </label>
                        </div>
                    </div>

                    <div class="flex-btn">
                        <div class="login">
                            <label for="login">
                                <button type="submit" name="login" id="login">LOGIN</button>
                                <i class="fas fa-sign-in-alt"></i>
                            </label>

                        </div>

                </form>
                <div id="prompt">
                    <p>New to Asclepius?<a class="forgot" href="signup">Sign Up</a></p>
                </div>
            </div>

        </div>
    </div>

    <footer>&copy2019 <span class="blue">Team Asclepius.</span> All Rights Reserved.</footer>

    </div>

    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>