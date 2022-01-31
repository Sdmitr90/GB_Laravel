<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@section('title') Главная страница  @show</title>
</head>
<body>
<div class="col-md-6">
    <div class="header">
        @include('blocks.menu')
        <nr></nr>
        @yield('menu')

    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
    </div>
</div>
</body>
</html>
