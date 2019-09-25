<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
              integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->

        <!-- Styles -->
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        <style>
            .toast {
                opacity: 0.9!important;
            }
        </style>
    </head>

    <body>
        <div class="container" id="container">

            @yield('content')
            <div class="modal" style="display: none">
                <div class="center">
                    <img src="{{asset('images/reload.gif')}}"  >
                </div>
            </div>

            <footer>&copy2019 <span class="blue">Team Asclepius.</span>  All Rights Reserved.</footer>
            </            div>   
            <script src="{{ asset('js/jQuery.js') }}"></script>
            <script src="{{ asset('js/main.js') }}" defer></script>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
            
            <script>
/*
 login
 */
$('#login').submit(function (event) {
    event.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function () {
            $(".modal").show();
        },
        complete: function () {
            $(".modal").hide();
        }
    });
    jQuery.ajax({
        url: "{{url('user/login')}}",
        type: 'POST',
        data: {
            username: jQuery('#username').val(),
            password: jQuery('#password').val()
        },
        success: function (data) {
            if (data.status === 401) {
                var message = data.message;
                toastr.error(message, {timeOut: 50000});
                return false;
            }
            if (data.status === 200) {
                var message = data.message;
                toastr.options.onHidden = function () {
                    window.location.href = "{{url('/home')}}";
                };
                toastr.success(message, {timeOut: 50000});
                return false;
            }
        }

    });
});
            </script> 
             @yield('extra')
    </body>
</html>
