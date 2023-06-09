<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ormon</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size:60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .TopButton > a{
                color: #636b6f;
                padding: 0 25px;
                font-size: 10px;
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
            
            <div class="top-left TopButton">
                <a href={{route('home.page')}}>Voltar</a>
            </div>

            <div class="top-right links">
                @auth
                    
             
                @else
                 
                @endauth
            </div>
            

            <div class="content">
                
                <div class="title m-b-md">
                    Log-In
                </div>

                <div class="links">
                    <form action='' method='post'>
                        @csrf
                        Nome :
                        <input type='text' name='name' >
                        <br>
                        Email :
                        <input type='text' name='email' >
                        <br>
                        Senha :
                        <input type='password' name='password' />
                        <br>
                        <button type=submit>enter</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>
