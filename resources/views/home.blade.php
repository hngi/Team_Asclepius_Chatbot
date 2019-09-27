@extends('layouts.login')

@section('content')
        <div class="inner-container grid">
            <div class="form-img-wrapper">
                <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1569329467/chatbot/opinionbg_ylkxa8.png
    " alt="">
            </div>

            <div class="form-wrapper">
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="logindesign" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                <br/> <br/>
                <h1 class="lead">Hi {{Auth::user()->username}}</h1>
               <br/>
                    <div class="flex-btn">
                        <div class="login">
                            <label for="login">
                             <a href="#" onclick="botmanChatWidget.open();return false;">   <button type="submit" class="logindesign" class="btn-sumbmit">Chat With Our Bot</button></a>
                                <i class="fas fa-chat"></i>
                            </label>

                        </div>
          
               
            </div>

        </div>
    </div>
@section('extra')


  
    <script>
	    var botmanWidget = {
	        aboutText: 'Team Asclepius by Kizito',
                title: 'Asclepius Bot',
	        introMessage: "✋ Hi! {{Auth::user()->username}}"
                
	    };
    </script>
  
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
@endsection
@endsection
      
</html>
