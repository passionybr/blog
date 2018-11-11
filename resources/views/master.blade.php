<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<script src="/js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
     </head>
    <body>
        <div class="flex-center position-ref full-height">
             
			<div class="top-right links">
                            <?php //if (Auth::check()) { echo "1==="; } else {echo "2===";}?>
                            @auth
                            <a href="{{ url('/profile') }}">Profile</a>
                            <a href="{{ url('/logout') }}">Logout</a>
                            @else
                            <a href="{{ url('login') }}">Login</a>
                            <a href="{{ url('register') }}">Register</a> 
                            @endauth
			</div>
			 <div class="content">
				<div class="m-b-md">
					@yield('content') 
				</div>
				@include('footer') 
			</div>
			 
        </div>
    </body>
</html>
