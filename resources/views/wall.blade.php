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
  <div class="container">

    <!-- Title -->
    <h1 class="center-align">Theme: {{ $wall }}</h1>

  </div>

  <div id="bottom-border"></div>
  <script src="{{ URL::asset('js/script_home.js') }}"></script>
</body>
</html>
@endsection
