<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Design Forum') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/1.7.22/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link href="/css/frontend.css" rel="stylesheet">
    <style>
        .tile--wrapper  {
            padding-top: 20px;
            padding-bottom: 20px;
            border-left: 2px solid #b0a258;
        }

        .tile--wrapper .tile--icon {
            font-size: 3em;
            margin-bottom: 5px;
        }

        .tile--wrapper .tile--text {
            padding-left: 8px;
            padding-right: 8px;
        }

        .tile--wrapper .tile--text .title {
            font-size: 1.2em;
            font-weight: 700;
        }

        .tile--wrapper:first-of-type {
            border-left: none;
        }

        .content--split-2 .img-wrapper {
            text-align: center;
        }

        .content--split-2 .img-wrapper .flaticon {
            font-size: 14em;
        }

        .content--split-2 .img-wrapper img {
            max-height: 250px;
        }

        .content--split-2 .text-wrapper {
            padding: 10px 25px;
            line-height: 2;
        }

        .footer {
            padding: 20px 0;
            color: #fff;
            background: #727062;
        }
        
        .footer--contact {
            padding: 60px 0;
            text-align: center;
            font-size: 1.1em
        }

        .footer--contact .footer--contact-item {
            border-left: 2px solid #b0a258;
            padding-top: 20px;
            padding-bottom: 30px;
            height:160px;
        }

        .footer--contact .footer--contact-item:first-of-type {
            border-left: none;
        }

        .footer--contact .footer--contact-item .icon {
            font-size: 2.2em;
        }
    </style>
    @yield('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    
    <div class="main-content animsition">

        @include('frontend.partials.navbar')
        @include('frontend.partials.sidebar')

        @yield('header')

        @yield('content')

        @include('frontend.partials.footer')

        <a href="#" id="to--top" class="to--top"><span class="mdi mdi-chevron-up"></span></a>

    </div>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js></script>
    <script src="/js/frontend.js"></script>

    <script>
        $animsition = $(".animsition");
        $(document).ready(function() {
            $animsition.animsition({
                inClass: 'fade-in',
                outClass: 'fade-out',
                inDuration: 1500,
                outDuration: 800,
                linkElement: '.animsition-link',
                // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
                loading: true,
                loadingParentElement: 'body', //animsition wrapper element
                loadingClass: 'animsition-loading',
                loadingInner: '', // e.g '<img src="loading.svg" />'
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: [ 'animation-duration', '-webkit-animation-duration'],
                // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
                // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
                overlay : false,
                overlayClass : 'animsition-overlay-slide',
                overlayParentElement : 'body'
            });
        });

        $(document).on('click', '.foo', function(event){
            event.preventDefault();
            var $elem = $(this);
            var url = $elem.attr('href');
            $animsition.animsition('out', $elem, url);
        });
    </script>

    @yield('scripts')
</body>
</html>
