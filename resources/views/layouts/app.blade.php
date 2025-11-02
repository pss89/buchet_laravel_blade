<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 기타 메타 태그 및 스크립트 -->
    <link rel="icon" href="{{ asset('images/favicon/favicon.ico') }}">
    @csrf

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">

    <!-- <title>
        {{ env('APP_TITLE') }}
    </title> -->

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>{{ env('APP_TITLE') }} - @yield('title')</title>
    <!-- <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen justify-between">

@if(!isset($headerData))
    @php
        $headerData = [];
    @endphp
@endif

@include('layouts/header', ['headerData' => $headerData])

@yield('content')

@include('layouts/footer')
<script>
$(function(){
    $("#naviBtn").click(function(){
        $("#menuList").toggle();
    });
});
</script>
</body>
</html>