<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Truckers</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/css/rtl/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="{{ asset('assets/css/rtl/bootstrap.rtl.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('assets/css/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('assets/css/plugins/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/rtl/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('assets/css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/css/font-awesome/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>


<body>

    <div id="wrapper">

    @include('include.nav')

    @yield('content')



    <!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('assets/js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('assets/js/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('assets/js/morris/morris.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('assets/js/sb-admin-2.js')}}"></script>

</body>

</html>