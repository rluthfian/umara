<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="PT Umara Multi Bisnis" content="PT Umara Multi Bisnis">
    <meta name="title" content="PT Umara Multi Bisnis">
    <meta name="description" content="PT Umara Multi Bisnis merupakan Perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.">
    <meta name="keywords" content="distribution company,perusahaan distribusi,perusahaan indonesia">
    <meta name="url" content="{{base_url('')}}">
    <meta name="image" content="{{assets_url('images/icons/logo-2.png')}}">
    <meta name="fb::app_id" content="">
    <meta name="article:author" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="PT Umara Multi Bisnis">
    <meta itemprop="description" content="PT Umara Multi Bisnis merupakan Perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.">
    <meta itemprop="image" content="{{assets_url('images/icons/logo-2.png')}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:author" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{base_url('')}}">
    <meta property="og:title" content="PT Umara Multi Bisnis">
    <meta property="og:description" content="PT Umara Multi Bisnis merupakan Perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.">
    <meta property="og:image" content="{{assets_url('images/icons/logo-2.png')}}">
    <meta property="og:image:secure_url" content="{{assets_url('images/icons/logo-2.png')}}" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="PT Tigaraksa Satria">
    <meta name="twitter:description" content="PT Umara Multi Bisnis merupakan Perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.">
    <meta name="twitter:twitter-id" content="">
    <meta name="twitter:image" content="{{assets_url('images/icons/logo-2.png')}}">

    <link rel="icon" href="{{assets_url('images/icons/cropped-favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{assets_url('images/icons/cropped-favicon-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{assets_url('images/icons/cropped-favicon-180x180.png')}}" />
    <meta name="msapplication-TileImage" content="{{assets_url('images/icons/cropped-favicon-270x270.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title> @yield('title') </title>
    @include('layouts.head')

</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.foot')
</body>

</html>