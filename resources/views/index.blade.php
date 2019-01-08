<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"  />
    <link href="{{asset('css/feedback.css')}}" rel="stylesheet" type="text/css"  />
    <link href="{{asset('css/goal.css')}}" rel="stylesheet" type="text/css"  />
    <link href="{{asset('css/plan.css')}}" rel="stylesheet" type="text/css"  />
    <link href="{{asset('css/dialy.css')}}" rel="stylesheet" type="text/css"  />
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"  />
    <script src="https://uicdn.toast.com/tui.code-snippet/latest/tui-code-snippet.js"></script>
<script src="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.js"></script>
<link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.css" />
</head>
<body>
    <div id="notebook">
        <router-view></router-view>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>