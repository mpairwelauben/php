<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lsap</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="bg-green-500">
    <nav class="p-4 bg-green-100 flex justify-between m-6 rounded-xl">
<ul class="flex items-center">
    <a href="{{route('home')}}" class="p-3">Home</a>
    <a href="{{route('dashbord')}}" class="p-3">Dashbord</a>
    <a href="{{route('posts')}}" class="p-3">Posts</a>
</ul>
<ul class="flex items-center">
  @auth
    <li>
        <a href="" class="p-3">{{auth()->user()->name}}</a>
    </li>
      <li>
          <form action="{{route('logout')}}" method="POST">
            @csrf
        <button class="p-3 bg-blue-500 rounded-xl text-white" type="submit">logout</button>
    </form>
    </li>  
    @endauth
    @guest
    <a href="{{route('register')}}" class="p-3">Register</a>
    <a href="{{route('login')}}" class="p-3">login</a> 
    {{-- <a href="{{route('sign out')}}" class="p-3">sign out</a>   --}}
    @endguest

</ul>
    </nav>
    
    @yield('content')
   
</body>
</html>