<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PAGE TITLE HERE -->
    <title>W3CRM Customer Relationship Management</title>

   
    <link href="//fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="dashboard" class="brand-logo">
                <object class="logo-abbr" data="assets/images/svg/icon-logo.svg" type="image/svg+xml" height="20"></object>
                &nbsp;<object class="brand-title" data="assets/images/svg/text-logo.svg" type="image/svg+xml" height="12"></object>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

       <?php include "theme/admin/components/top-header.php"?>

	   <?php include "theme/admin/components/sidebar-menu.php"?>

        <!--**********************************
            Content body start
        ***********************************-->
       <?php echo $content ?>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer out-footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="/" target="_blank">VIP Courier & Cargo</a> <?=date("Y")?></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

       


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="assets/vendor/global/global.min.js"></script>
    <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/deznav-init.js"></script>
</body>

</html>