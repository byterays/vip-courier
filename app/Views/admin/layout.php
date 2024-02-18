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
    <link href="/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">

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

        <?=view ('admin/partials/header')?>

        <?=view ('admin/partials/sidebar-nav')?>


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <?php foreach ($bread_crumbs as $bread) : ?>
                        <li class="breadcrumb-item <?= @$bread["class"] ?>"><a href="<?= @$bread["link"] ?>"><?= @$bread["text"] ?></a></li>
                    <?php endforeach; ?>
                </ol>
            </div>
            <div class="container-fluid">

                <!--**********************************
                        Content body start
                    ***********************************-->
                    <?= $this->renderSection('content') ?>
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
    <script src="/assets/vendor/global/global.min.js"></script>
    <script src="/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Datatable -->
    <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="/assets/js/plugins-init/datatables.init.js"></script>

    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/deznav-init.js"></script>
</body>

</html>