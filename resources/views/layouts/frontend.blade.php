<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('images/logo_kbm.ico')}}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>BEM UNTAN</title>
    @yield('css')
    <style>
        .gradient {
            background: linear-gradient(90deg, #6ba6e6 0%, #04e4dc 100%);
        }
    </style>
    <style>
        .border-b-1 {
            border-bottom-width: 1px;
        }
        .border-l-1 {
            border-left-width: 1px;
        }

        hover\:border-none:hover {
            border-style: none;
        }
        #sidebar {
            transition: ease-in-out all .3s;
            z-index: 9999;
        }
        #sidebar span {
            opacity: 0;
            position: absolute;
            transition: ease-in-out all .1s;
        }
        #sidebar:hover {
            width: 150px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            /*shadow-2xl*/
        }
        #sidebar:hover span {
            opacity: 1;
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-white bg-gray-50 font-mono">
    @include('layouts.components.navbar')
    {{-- header --}}
    <div class="flex flex-row flex-wrap flex-1 flex-grow content-start pl-16">
        @yield('content')

        @include('layouts.components.footer')
    </div>


    @yield('js')

    <script src="{{ asset('assets/js/extensions/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/datepicker.js"></script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>

</body>

</html>
