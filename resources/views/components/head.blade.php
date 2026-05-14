@php
  use App\Models\Setting;
@endphp

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ Setting::get('seo_title') }}</title>

  <meta name="description" content="{{ Setting::get('seo_description') }}">
  <meta name="keywords" content="{{ Setting::get('seo_keywords') }}">
  <meta name="author" content="{{ Setting::get('seo_author') }}">

  <meta property="og:title" content="{{ Setting::get('seo_title') }}">
  <meta property="og:description" content="{{ Setting::get('seo_description') }}">
  <meta property="og:type" content="website">

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=bricolage-grotesque:400,500,600,700" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
