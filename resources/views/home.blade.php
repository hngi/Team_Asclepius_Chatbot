@extends('layouts.login')

@section('title','Chatbot User Homepage')

@section('content')

        <div class="inner-container grid">
            
            <div class="form-img-wrapper">
                <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1569329467/chatbot/opinionbg_ylkxa8.png
            " alt="">
            </div>


            <div class="form-wrapper">
                <br/>
                <h1 class="lead">Hi {{Auth::user()->username}}</h1>
               <br/>
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
