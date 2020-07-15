<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("../img/apple-icon.png")}}">
    <link rel="icon" type="image/png" href="{{asset("../img/favicon.png")}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Admin Green Earth </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="{{asset("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons")}}"/>
    <link rel="stylesheet"
          href="{{asset("https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css")}}">
    <!-- CSS Files -->
    <link href="{{asset("../css/material-dashboard.css?v=2.1.0" )}}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset("../demo/demo.css")}}" rel="stylesheet"/>


    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    {{--ckfinder--}}
    <script type="text/javascript" src="{{asset("/js/ckfinder/ckfinder.js")}}"></script>
    <script>CKFinder.config( { connectorPath: '/ckfinder/connector' } );</script>
</head>


