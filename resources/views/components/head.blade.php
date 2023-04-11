<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>JobHive</title>
        <!--=============== Favicon ===============-->
        <link rel="icon" type="image/x-icon" href="/assets-list/img/favicon.png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
            <!-- Styles -->
        <!--=============== css ===============-->
        <link rel="stylesheet" href="{{ asset('asset-list/css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('asset-list/js/app.js') }}" defer></script>
         <!--=============== SWIPER CSS ===============--> 
         <link rel="stylesheet" href="merge/assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="merge/assets/scss/styles.css">
        <!--=============== Favicon ===============-->
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>