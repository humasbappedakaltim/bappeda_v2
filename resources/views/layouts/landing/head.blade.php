<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bappeda Kaltim</title>

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="shortcut icon" href="{{ asset('asset_dashboard/img/photos/logo_head.png') }}" />


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ asset('assets/libs/OwlCarousel-2/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/iconfont/tabler-icons.css')}}">
<!-- boostrap  icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/cursor/cursor.css') }}">


@stack('front_css')
