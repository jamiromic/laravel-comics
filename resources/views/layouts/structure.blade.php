<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('metaTitle','DC Comics')</title>
  @yield('meta')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  {{-- Header --}}
  @include('partials.header')
  
  {{-- Main Content --}}
  {{-- @include('partials.main') --}}

  {{-- Footer --}}
  {{-- @include('partials.footer') --}}
  
</body>
</html>