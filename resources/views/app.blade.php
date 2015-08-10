<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<html>
    <head>
        <meta charset="utf-8">
        <title>Title</title>
    </head>
    <body>
        <div class="content">
            @if (Session::has('message'))
            <div class="flash alert-info">
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif
            @yield('content')
        </div>
        @yield('footer')
    </body>
</html>
