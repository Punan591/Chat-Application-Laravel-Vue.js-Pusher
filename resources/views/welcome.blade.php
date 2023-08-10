<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 150;
                height: 80vh;
                margin: 0;
                text-align:center;
                background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url({{asset('img/home.jpg')}});
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                background-repeat: no-repeat;
                font-family: 'Poppins', sans-serif;
                
            }
            .home_img_des{
                 position: absolute;
                 top:10px;
                 left:450px;
             }
             .btn0{
              background-color:#0C58AC;
              height: 30px;
              width: 100px;
              font-weight: 600;
              color:black;
              padding-bottom:0.5rem!important;
              outline: none;
              border:none;
              border-radius:5px;
             }
            .btn0:hover{
              background-color: #333333;
              color: white;
              transition: 0.2s;

              }
         

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                padding: 10px 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn btn0" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn0" href="{{ route('login') }}">Login</a>
                        <a class="btn btn0" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="flex-center position-ref full-height">
               <img src="{{asset('img/home.png')}}" height="700px" weight="700px" alt="No image"/>

              
            </div>
        </div>
    </body>
</html>
