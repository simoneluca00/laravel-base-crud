<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link FontAwesome 6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- link Bootstrap 5 --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

    {{-- link Custom Style --}}
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
    <title>
        @yield('title')
    </title>
</head>
<body>

<header>
    {{-- NAV presente in tutte le views --}}
    @include('includes._header')
</header>

<main>
    {{-- section HERO presente in tutte le views --}}
    <section id="hero">

    </section>

    @if (Request::route()->getName() == 'comics.index')
       
    @include('includes.messages.success')

   @endif

    <div class="container-fluid {{ Request::route()->getName() == 'comics.index' || Request::route()->getName() == 'characters.index' || Request::route()->getName() == 'home' || Request::route()->getName() == 'aboutUs' || Request::route()->getName() == 'news' || Request::route()->getName() == 'contacts' ? 'bg_main_cust' : '' }} {{ Request::route()->getName() == 'comics.show' ? 'p-0' : 'p-5'}}">

        @yield('content')
    </div>

    {{-- blocco con 5 links del <main> e background primary presente in tutte le views, eccetto le show --}}
   @if (Request::route()->getName() == 'home' || Request::route()->getName() == 'aboutUs' || Request::route()->getName() == 'news' || Request::route()->getName() == 'contacts' || Request::route()->getName() == 'comics.index' || Request::route()->getName() == 'comics.create' || Request::route()->getName() == 'comics.edit' || Request::route()->getName() == 'characters.index' || Request::route()->getName() == 'characters.create' || Request::route()->getName() == 'characters.edit' )
       
    @include('includes.Mainlinks._primary')

   @endif

   {{-- blocco con 4 links del <main> e background secondary presente solo nelle rotte show di ogni resource controller --}}
   @if (Request::route()->getName() == 'comics.show' || Request::route()->getName() == 'characters.show')
       
    @include('includes.Mainlinks._secondary')

   @endif

</main>

<footer>
   @include('includes._footer')
</footer>
    
{{-- script Bootstrap 5 --}}
<script src=" {{ asset('js/app.js') }} "></script>

{{-- script del file deleteConfirm.js per la view index --}}
@yield('delete-confirm')

</body>
</html>