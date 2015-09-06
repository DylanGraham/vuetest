<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>
<body>

<div id="demo" class="container">
    <input type="text" v-model="name">

    <pre>@{{ $data | json }}</pre>
</div>

<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
