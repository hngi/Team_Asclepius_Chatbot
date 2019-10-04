<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/contact_us.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/navbar.css">
  </head>

  <body>
    @if(Auth::check())
            <nav> 
                <ul>
                    <li> <a href="/home"> Homepage </a> </li>
                    <li> <a href="/contact_us">Contactus </a> </li>
                    <li> <a href="/help"> Help</a> </li>
                    <li style="position:fixed; right:0; background-color:red;">
                        <a href="/logout">Log out </a>
                    </li>
                </ul>
            </nav>
        @else
            <nav> 
            <ul>
                <li> <a href="/home"> Homepage </a> </li>
                <li> <a href="/contact_us">Contactus </a> </li>
                <li> <a href="/help"> Help</a> </li>
                <li style="position:fixed; right:0; background-color:green;">
                    <a href="/register">sign up</a>
                </li>
            </ul>
        </nav>
        @endif
    <div class="main">

      <h2>Contact Us.</h2>
      <p>Do you have any more Questions about the workings of our chatbot?</p>
      <p>Our team would love to hear from you.</p>
      <br>
      <span></span><a href="mailto:ladydondammy@yahoo.com" target="blank">Mail us</a><span></span>
      <p>Questions Unrelated to the bot? Ask <span><a href="https://www.google.com" target="blank">Google</a></span></p>
      <img class="emoji" src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1569329467/chatbot/opinionbg_ylkxa8.png
      " alt="">


    </div>

    
    <footer>
      <div class="address">
        <p>Contact Address:</p>
        <p><i>No 3, Birrel Avenue,<br> off Herbert Macaulay Way,<br> Sabo, Yaba, Lagos.<br> </p>
        <p>or call<br> +2348137140110</i></p>
      </div>

      <div class="copyright">
        <p>&copy2019 <span class="blue">Team Asclepius.</span> All Rights Reserved.</p>
      </div>
      
    </footer>
  </body>

</html>