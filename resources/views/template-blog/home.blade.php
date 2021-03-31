<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('edica/assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('edica/assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('edica/assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('edica/assets/favicon/site.webmanifest')}}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('edica/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('edica/assets/vendors/font-awesome/css/all.min.css')}}">
    <link href="{{asset('edica/assets/vendors/aos/aos.css" rel="stylesheet')}}">
    <link rel="stylesheet" href="{{asset('edica/assets/css/style.css')}}">
    <script src="{{asset('edica/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('edica/assets/js/loader.js')}}"></script>
    <style>
        #topBtn {
            position: fixed;
            bottom: 85px;
            right: 25.3px;
            font-size: 22px;
            width: 50px;
            background-color: #03a84e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header class="edica-header edica-landing-header">
        <div class="container">
            @include('template-blog.navbar')
        </div>
    </header>

    <main>
        @yield('content')
        <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    </main>
    @include('template-blog.footer')
     <!--Start of Tawk.to Script-->
    <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/604809631c1c2a130d66ce20/1f0cm9bbv';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
    </script>
    <!--End of Tawk.to Script-->
    {{-- Start of back to top button --}}
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop() > 40){
                    $('#topBtn').fadeIn();
                } else {
                    $('#topBtn').fadeOut();
                }
            });

            $("#topBtn").click(function(){
                $('html, body').animate({scrollTop : 0}, 800);
            });
        });
    </script>
    {{-- End of back to top button --}}
    <script src="{{asset('edica/assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('edica/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('edica/assets/vendors/aos/aos.js')}}"></script>
    <script src="{{asset('edica/assets/js/main.js')}}"></script>
    <script>
        AOS.init({
            duration: 2000
        });
    </script>
</body>

</html>