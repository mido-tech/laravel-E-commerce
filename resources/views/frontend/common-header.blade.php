<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footcap - Find your footware</title>


  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('frontent/assets/css/style.css') }}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!--
    - preload banner
  -->
  <link rel="preload" href="./assets/images/hero-banner.png" as="image">
  <link rel="preload" href="{{ asset('frontend') }}/assets/images/hero-banner.png" as="image">

  <link rel="stylesheet" id="pagestyle" href="{{ asset('dashboard') }}/assets/css/material-dashboard.css?v=3.1.0">
  {{-- <link rel="stylesheet" id="pagestyle" href="{{ asset('dashboard') }}/assets/css/custom.css?v=3.1.0"> --}}
  <link rel="stylesheet" id="pagestyle" href="{{ asset('dashboard') }}/assets/css/material-dashboard.css">
  <link rel="stylesheet" id="pagestyle" href="{{ asset('dashboard') }}/assets/css/material-dashboard.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


</head>
