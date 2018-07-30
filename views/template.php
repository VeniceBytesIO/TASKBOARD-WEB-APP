<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>TaskBoard</title>
    <!-- Favicon-->
    <link rel="icon" href="views/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="views/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="views/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="views/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="views/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="views/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="views/css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-red">

    <?php 
    //initialize country lenguage
        setlocale(LC_ALL, "es_GT.UTF-8", "es_GT", "esp");
    //initialize country timezone
        date_default_timezone_set('America/Guatemala');
        $route = new RouterController();
        $route->loadRoutesController();
      ?> 

    <!-- Jquery Core Js -->
    <script src="views/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="views/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="views/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="views/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="views/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="views/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="views/plugins/raphael/raphael.min.js"></script>
    <script src="views/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="views/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="views/plugins/flot-charts/jquery.flot.js"></script>
    <script src="views/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="views/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="views/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="views/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="views/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="views/js/admin.js"></script>
    <script src="views/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../views/js/demo.js"></script>
</body>

</html>
