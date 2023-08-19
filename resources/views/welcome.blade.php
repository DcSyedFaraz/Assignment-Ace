<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="resources/css/app.css"> --}}
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script src="{{ mix('/js/app.js') }}" defer></script>

</head>
<body>
<div id="app">

</div>
<div id="lay"></div>
<router-view></router-view>
<about/>
<div id="footer">

</div>
<script>

</script>
<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

</body>
</html>
