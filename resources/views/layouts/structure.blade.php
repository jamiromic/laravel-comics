<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('metaTitle','DC Comics')</title>
  {{-- CCS --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- FONT AWESOME --}}
  <script src="https://kit.fontawesome.com/f54de030ee.js" crossorigin="anonymous"></script>
</head>
<body>

  {{-- Header --}}
  @include('partials.header')
  
  {{-- Main Content --}}
  @yield('content')
  

  {{-- Footer --}}
  @include('partials.footer')
  
</body>
</html>