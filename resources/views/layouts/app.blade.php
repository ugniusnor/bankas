<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
   
   <header>
       <div class="header-container">
           <ul>
               <li> <a href="">Home</a> </li>
               @auth
               <li> <a href="{{route('dashboard')}}">Dashboard</a> </li>                   
               @endauth
           </ul>
           <ul>
               @auth
               <li> <a href="">{{auth()->user()->name}}</a></li>
               <li> <a href="">My profile</a> </li>                   
               @endauth
               @guest
               <li> <a href="{{route('login')}}">Login</a> </li>
               <li> <a href="{{route('register')}}">Register</a> </li>                   
               @endguest
            @auth
            <li> <a href="{{route('logout')}}">Logout</a> </li>                
            @endauth

        </ul>

       </div>
   </header>

@yield('content')

<script src="{{ asset('js/app.js') }}" type="module"> 

</script>
</body>
</html>