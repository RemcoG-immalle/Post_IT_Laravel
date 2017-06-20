@extends('layouts.app')

@section('content')
<html>
<head>
  <title>Post IT</title>

  <!-- Materialize -->
  <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="{{ URL::asset('js/materialize.js') }}"></script>

  <!-- Google Font -->
  <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{ URL::asset('css/style_home.css') }}">
</head>

<body>

  <!-- Search Bar -->

  <!-- Ribbon -->
  <div class="center-wrap">
    <div class="title-container">
      <div class="ribbon-left"></div>
      <div class="backflag-left"></div>
      <div class="title"><a href="/">Post IT</a></div>
      <div class="backflag-right"></div>
      <div class="ribbon-right"></div>
    </div>
  </div>

  <div class="container">

    <!-- Content -->
    <p class="center-align">Dit wordt een webapplicatie waarbij je op verschillende Walls (per thema) een post-it kan achterlaten met een korte boodschap.</p>

  </div>

  <div id="bottom-border"></div>
  <script src="{{ URL::asset('js/script_home.js') }}"></script>
</body>
</html>
@endsection
