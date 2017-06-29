<html>
    <head>
        <meta charset="UTF-8">
        <title>@if (!empty($title) )
            {{ $title }}  
            @else 
            MyHero 
            @endif</title> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/> 
        <link href="{{ asset('carousel.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <header> 
            <!-- NAVBAR
================================================== -->
            <body>
                <div class="navbar-wrapper">
                    <div class="container">

                        <nav class="navbar navbar-inverse navbar-static-top">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="{{ url('')}}">MyHero</a>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse" >
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{ url('about')}}">About</a></li>
                                        <li><a href="{{ url('shop')}}">Shop</a></li>
                                    </ul> 
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="{{ url('user/signin')}}">Sign In</a></li>
                                        <li><a href="{{ url('user/signup')}}">Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
                <div class="container">@yield('carousel')</div>



        </header>  
        <br><br><br>
        <main>  
            <div class="container">@yield('content')</div>
        </main>  
        <br><br><br>
        <footer>  
            <div class="container">  
                <hr>
                <div class="row"> 
                    <div class="col-md-12" > 
                        <p class="text-center" style="font-size: 18px;" >MyHero &copy; {{ date('Y') }} </p>
                    </div>
                </div> 
            </div>
        </footer>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
        <script src="{{ asset('js/script.js') }}" type="text/javascript"></script> 
    </body>
</html>
