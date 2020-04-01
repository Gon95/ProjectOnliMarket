<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articulos</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    @if(Session::has('notice'))
		{{Session::get('notice')}}
	@endif

	@if(Session::has('error'))
		{{Session::get('error')}}
	@endif

	@yield('contenido')
     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
</html>