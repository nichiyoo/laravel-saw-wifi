<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('seo.title') }}</title>

  <meta name="description" content="{{ config('seo.description') }}">
  <meta name="keywords" content="{{ config('seo.keywords') }}">
  <meta name="author" content="{{ config('seo.author') }}">

  <meta property="og:title" content="{{ config('seo.title') }}">
  <meta property="og:description" content="{{ config('seo.description') }}">
  <meta property="og:type" content="website">

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=bricolage-grotesque:400,500,600,700" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
