<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
	<title></title>
	<link rel="Shortcut icon" href="{{asset('images/ico.jpg')}}" type="image/x-icon"/>
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
	<link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/header_footer.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<div id="notebook">
	<router-view></router-view>
</div>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>