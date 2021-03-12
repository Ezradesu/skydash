<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{asset('edica/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('edica/assets/vendors/font-awesome/css/all.min.css')}}">
    <link href="{{asset('edica/assets/vendors/aos/aos.css" rel="stylesheet')}}">
    <link rel="stylesheet" href="{{asset('edica/assets/css/style.css')}}">
    <script src="{{asset('edica/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('edica/assets/js/loader.js')}}"></script>
</head>

<body>
    <div class="edica-loader"></div>
    <header class="edica-header edica-landing-header">
        <div class="container">
            @include('template-blog.navbar')
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    @include('template-blog.footer')
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