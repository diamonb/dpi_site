<!doctype html>
<html lang="fr">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FZ1KJW2P5B"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FZ1KJW2P5B');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet" />
    <link rel="canonical" href="https://icons.getbootstrap.com/">
    <link rel="icon" type="image/x-icon" href="/images/icons/favicon.ico">
    
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magic.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dpi.css')}}">
    <title>DPI</title>
</head>
<body>
    @include("partials.headNew")
    @yield("content")

    <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('js/lightbox.js')}}"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="{{asset('mdb/js/mdb.min.js')}}"></script>
    <script src="{{asset('js/li-scroller.js')}}"></script>
    <script src="{{asset('css/jquery.rcbrand.js')}}"></script>
    <script src="{{asset('js/dpi.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script id="shoutscript" type="text/javascript" src="https://freeonlinesurveys.com/ShoutEmbed/embed.min.js"></script>
    <script src="{{asset('js/jquery.timeago.js')}}"></script>
</body>
</html>