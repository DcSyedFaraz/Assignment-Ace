<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- No Index --}}
    <meta name="robots" content="noindex">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="xFfFMm0UfLUjLAT6s3EW3gIZplo9RTcKeiBHRHCz">

    {{-- Chrome Address Bar Color --}}
    <meta name="theme-color" content="#fff" />

    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description')" />

    {{-- Facebook share --}}
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', env('APP_NAME'))" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{ asset('imgs/logo.png') }}" />

    {{-- Twitter share --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title', '')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="{{ asset('imgs/logo.png') }}" />

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical', '')" />
    {{-- CUSTOM CSS --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/frontend-customcss.css') }}"> --}}
    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.ico') }}">
    {{-- swiper cdn --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{-- AOS CSS CDN --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">




    {{-- intl Tel Input CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style>
        .iti {
            width: 100%;
            /* margin-top:11px; */
        }
        ::-webkit-scrollbar {
            width: 10px;
            background: white;
            border-radius: 5px
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px white;
            border-radius: 100px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: black;
            border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #2a4fc8;
        }

        .overflow-x-auto {
            max-height: 562px;
            direction: rtl;
        }
    </style>
 <script src="{{ mix('resources/js/app.js') }}"></script>
@vite(['resources/js/app.js', 'resources/css/app.css'])
    {{-- Alpine JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> --}}
    @yield('links')

    @yield('styles')
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            font-family: 'Inter', sans-serif;
        }


    </style>

</head>

<body class="bg-slate-100">

    {{-- @include('partials.frontend.navbar') --}}
<nav-component></nav-component>
    <div id="app">

    </div>







    {{-- Footer --}}
    {{-- @include('partials.frontend.footer') --}}

    {{-- Tawto --}}
    {{-- {{ \TawkTo::widgetCode() }} --}}

    {{-- scripts --}}
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    {{-- FontAwsome 6 --}}
    <script src="https://kit.fontawesome.com/2c6b599d00.js" crossorigin="anonymous"></script>

    {{-- jQuery cdn --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- AJAX jQuery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- intl Tel Input JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    {{-- AOS JS CDN --}}
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script> --}}
    <!--swiper script for client reviews  -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script> --}}
    <script>
        // Get the element with id="defaultOpen" and click on it
        // document.getElementById("defaultOpen").click();

        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active border-primary-one-dark ", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active border-primary-one-dark ";
        }

        var tabs = document.getElementsByClassName('steps');
        // console.log(tabs);
        for (i = 0; i < tabs.length; i++) {
            tabs[i].addEventListener('click', function() {

                // console.log(this.getAttribute('data-source'));

                var num = parseInt(this.getAttribute('data-source'));

                var stepNo = document.getElementById('stepNo');
                var data = document.getElementById('stepData');

                console.log(stepNo, data, num);

                switch (num) {
                    case 1:
                        stepNo.innerHTML = "1";
                        data.innerHTML = "Fill out the form";
                        break;
                    case 2:
                        stepNo.innerHTML = "2";
                        data.innerHTML = "Make payment";
                        break;
                    case 3:
                        stepNo.innerHTML = "3";
                        data.innerHTML = "Keep in the loop with the essay help expert";
                        break;
                    case 4:
                        stepNo.innerHTML = "4";
                        data.innerHTML = "Your essay is in progress";
                        break;
                    case 5:
                        stepNo.innerHTML = "5";
                        data.innerHTML = "Receive your essay by email";
                        break;
                    case 6:
                        stepNo.innerHTML = "6";
                        data.innerHTML = "Submit the essay, and enjoy!";
                        break;



                }


            })
        }
    </script>


    @yield('scripts')

</body>

</html>
