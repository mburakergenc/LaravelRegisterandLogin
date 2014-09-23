<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Authentication App With Laravel 4</title>
    <script src="js/bootstrap.min.js"></script>

     {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('css/main.css')}}
  </head>
 
  <body>

   <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav">  
                @if(!Auth::check())
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    

                    {{ HTML::link('users/register', 'Register') }}
                    {{ HTML::link('users/login', 'Login') }} 
                      </div>
</nav>  
                @else
             <nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
                    {{ HTML::link('users/logout', 'logout') }}
                    </nav>  
                @endif
            </ul>  
        </div>
    </div>
</div>


  </div>
</nav>



    <div class="container">
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
 
        {{ $content }}
 
  </body>
</html>