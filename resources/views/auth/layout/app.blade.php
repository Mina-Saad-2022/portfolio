<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap_offline/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/login/style.css') }}">
    <title>{{ __('Login') }} & {{ __('Register') }}</title>
</head>

<body>
  @yield('content')
  <script src="{{ asset('website/login/script.js') }}"></script>
  <script src="{{ asset('bootstrap_offline/js/bootstrap.min.js') }}"></script>
</body>

</html>
