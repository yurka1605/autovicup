<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title?></title>
    <meta name="description" content="<?= $description?>"/>
    <meta name="keywords" content="выкуп,скупка,продать,автовыкуп,авто,автомобиль,быстро,срочно,дорого,автоскупка,машина,Волгоград"/>
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Автовыкуп" />
    <meta property="og:title" content="<?= $title?>" />
    <meta property="og:url" content="https://avtovykup-34.ru/" />
    <meta property="og:description" name="description" content="<?= $description?>" />
    <meta property="og:image" content="https://avtovykup-34.ru/img/vykup2.jpg" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.css" >
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/css/main2.css">
    <link rel="stylesheet" href="/css/nice-select.css" >
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.maskedinput.js"></script>
    <script charset="utf-8" src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        $(document).ready(function(){

        $.fn.setCursorPosition = function(pos) {
            if ($(this).get(0).setSelectionRange) {
                $(this).get(0).setSelectionRange(pos, pos);
            } else if ($(this).get(0).createTextRange) {
                var range = $(this).get(0).createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
            }
        };

        $('input[type="tel"]').click(function(){
                $(this).setCursorPosition(4);  // set position number
            });

            $.mask.definitions['h'] = "[0|1|3|4|5|6|7|9]"
            $("#phone").mask("+7(h99)999-9999");
            $("#phone2").mask("+7(h99)999-9999");
            $("#phone3").mask("+7(h99)999-9999");


        })


        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById("navbar");

        // Get the offset position of the navbar
        var sticky = navbar?.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar?.classList.add("sticky")
            } else {
                navbar?.classList.remove("sticky");
            }
        }          

    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1338203963044125');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1338203963044125&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PS9BVPH');
    </script>
    <!-- End Google Tag Manager -->
</head>
<script>fbq('track', 'Contact');</script>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS9BVPH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<?php require_once('templates/blocks/header.php') ?>