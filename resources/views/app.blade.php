<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <title>Rating | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico')}}"/>

            <!-- Bootstrap Rating css -->
            <link href="{{ asset('/assets/libs/bootstrap-rating/bootstrap-rating.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href=" {{asset('/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @vite(["resources/css/app.css", "resources/js/app.js"]) 
</head>
<body data-topbar="dark">
    
        <div id="layout-wrapper" >
        </div>


    
    <!-- Right Sidebar -->
        
    

    <!-- JAVASCRIPT -->
    <script src="{{asset('/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('/assets/libs/node-waves/waves.min.js')}}"></script>

    
    <!-- apexcharts -->


    <!-- jquery.vectormap map -->
    <script src="{{asset('/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    
    <!-- Responsive examples -->
    <script src="{{asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    
    <!-- App js -->
    
    <script src="{{asset('/assets/js/app.js')}}"></script>
</body>
</html>