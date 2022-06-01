<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link FontAwesome 6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- link Bootstrap 5 --}}
    <link rel="stylesheet" href=" {{ asset('./css/app.css') }} ">

    {{-- link Custom Style --}}
    <link rel="stylesheet" href=" {{ asset('./css/style.css') }} ">
    <title>
        @yield('title')
    </title>
</head>
<body>

<header>
    @include('includes.header')
</header>

<main>
    <div class="container py-5">
        @yield('content')
    </div>
</main>
    
{{-- script Bootstrap 5 --}}
<script src=" {{ asset('./js/app.js') }} "></script>

@yield('delete-confirm')

</body>
</html>