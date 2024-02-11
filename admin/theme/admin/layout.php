<?php require_once "config/init.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PAGE TITLE HERE -->
    <title>VIP Courier and Cargo :: Dashboard Panels</title>


    <link href="//fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

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

        <?php include "theme/admin/components/top-header.php" ?>

        <?php include "theme/admin/components/sidebar-menu.php" ?>


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <?php foreach ($bread_crumbs as $bread) : ?>
                        <li class="breadcrumb-item <?= $bread["class"] ?>"><a href="<?= $bread["link"] ?>"><?= $bread["text"] ?></a></li>
                    <?php endforeach; ?>
                </ol>
            </div>
            <div class="container-fluid">
                <?php               
                    if (@$_SESSION["flash"]) : ?>
                    <div class="alert alert-<?= $_SESSION['flash']['type'] ?> alert-dismissible fade show">
                        <?php if ($_SESSION['flash']['type'] == "success") : ?>
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                            </svg>

                        <?php elseif ($_SESSION['flash']['type'] == "warning") : ?>
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <?php elseif ($_SESSION['flash']['type'] == "danger") : ?>
                            <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg>

                        <?php elseif ($_SESSION['flash']['type'] == "info") : ?>
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>

                        <?php else : ?>
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                <line x1="15" y1="9" x2="15.01" y2="9"></line>
                            </svg>                        

                        <?php endif; ?>
                        <strong><?= $_SESSION['flash']['message'] ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                    </div>
                <?php
                    unset($_SESSION['flash']);
                    endif;
                ?>

                <!--**********************************
                        Content body start
                    ***********************************-->
                <?php echo $content ?>
                <!--**********************************
                        Content body end
                    ***********************************-->
            </div>
        </div>
        <!--**********************************
                    Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer out-footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="/" target="_blank">VIP Courier & Cargo</a> <?= date("Y") ?></p>
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
    <!-- Datatable -->
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/js/plugins-init/datatables.init.js"></script>

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/deznav-init.js"></script>
</body>

</html>