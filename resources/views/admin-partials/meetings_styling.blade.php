<head>
    <title>eLiveCare CRM - {{ request()->route()->getName() }} </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('design/files/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('design/files/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('design/files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('design/files/assets/icon/icofont/css/icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('design/files/assets/icon/feather/css/feather.css')}}">
    <!--sticky Css-->
    <link rel="stylesheet" href="{{ asset('design/files/assets/pages/sticky/css/jquery.postitall.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('design/files/assets/pages/sticky/css/trumbowyg.css')}}" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('design/files/assets/css/style.css')}}">




    <link rel="stylesheet" type="text/css" href="{{ asset('design/files/assets/css/jquery.mCustomScrollbar.css')}}">
    <style type="text/css">
        /**  =====================
    Sticky css start
==========================  **/
        /*add Button css Start*/

        .pulse-ring {
            content: '';
            width: 140px;
            height: 55px;
            border: 20px solid #1b8bf9;
            position: absolute;
            top: 18px;
            left: 18px;
            background-color: #1b8bf9;
            animation: pulsate infinite 1.5s;
        }

        @-webkit-keyframes pulsate {
            0% {
                -moz-transform: scale(0);
                opacity: 0.0;
            }

            25% {
                -moz-transform: scale(0);
                opacity: 0.1;
            }

            50% {
                -moz-transform: scale(0.1);
                opacity: 0.3;
            }

            75% {
                -moz-transform: scale(0.5);
                opacity: 0.5;
            }

            100% {
                -moz-transform: scale(1);
                opacity: 0.0;
            }
        }

        @-moz-keyframes pulsate {
            0% {
                -moz-transform: scale(0);
                opacity: 0.0;
            }

            25% {
                -moz-transform: scale(0);
                opacity: 0.1;
            }

            50% {
                -moz-transform: scale(0.1);
                opacity: 0.3;
            }

            75% {
                -moz-transform: scale(0.5);
                opacity: 0.5;
            }

            100% {
                -moz-transform: scale(1);
                opacity: 0.0;
            }
        }

        /*====== Sticky End ======*/
    </style>
</head>
