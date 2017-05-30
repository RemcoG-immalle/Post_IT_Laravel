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



  </div>

  <div id="bottom-border"></div>
  <script src="{{ URL::asset('js/script_home.js') }}"></script>
  <!-- P5 Libs -->
  <script language="javascript" type="text/javascript" src="{{ URL::asset('js/p5/p5.js') }}"></script>
  <!-- uncomment lines below to include extra p5 libraries -->
  <!--<script language="javascript" src="{{ URL::asset('js/p5/p5.dom.js') }}"></script>-->
  <!--<script language="javascript" src="{{ URL::asset('js/p5/p5.sound.js') }}"></script>-->
  <script language="javascript" type="text/javascript" src="{{ URL::asset('js/p5/sketch.js') }}"></script>
  <script language="javascript" type="text/javascript" src="{{ URL::asset('js/p5/vehicle.js') }}"></script>
  <style> body {padding: 0; margin: 0;} </style>
</body>
</html>
@endsection
