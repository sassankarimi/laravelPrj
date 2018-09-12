<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ss</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <!-- Styles -->


</head>
<body class="container">

@include('partials.flash')
@yield('content')
<script src="/js/app.js">
</script>
<script>

        $('div.alert').delay('3000').slideUp('300');


</script>
</body>
</html>
