<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Meta dari halaman --}}
    @yield('meta')

    <title>{{ $pageTitle ?? 'Universitas Teknokrat Indonesia' }}</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    #swiper {
      width: 100%;
      max-width: 1000px;
      margin: auto;
      padding: 20px 0;
    }

    #swiper-slide {
      background: transparent;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #swiper-slide img {
      width: 150px;
      height: auto;
      object-fit: contain;
      filter: drop-shadow(0 0 2px rgba(255, 255, 255, 0.2));
    }

    @media (max-width: 768px) {
      #swiper-slide img {
        width: 100px;
      }
    }
  </style>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Header -->
    @include('layouts.nav-desktop')
    @include('layouts.nav-mobile')