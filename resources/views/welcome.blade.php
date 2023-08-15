<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ mix('/js/app.js') }}" defer></script>

</head>
<body>
<div id="app">
    {{greeting}}
    {{-- <example-component> --}}
    {{-- <example-component/> --}}
</div>
<script>
    Vue.createApp({
        data(){
            return {
                greeting: 'What is up'
            };
        }
    }).mount('#app');
</script>
</body>
</html>
