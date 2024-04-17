<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<?php require './layouts/head.php' ?>

<!-- END: Head-->

<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click"
    data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php require_once("./layouts/header.php") ?>
    <!-- BEGIN: Page Main-->

    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section">
                    </div><!-- START RIGHT SIDEBAR NAV -->
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <?php require_once("./layouts/javascript.php") ?>
    <?php require_once("./layouts/footer.php") ?>

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?= base_url(["assets/vendors/chartjs/chart.min.js"]) ?>"></script>
    <script src="<?= base_url(["assets/vendors/chartist-js/chartist.min.js"]) ?>"></script>
    <script src="<?= base_url(["assets/vendors/chartist-js/chartist-plugin-tooltip.js"]) ?>"></script>
    <script src="<?= base_url(["assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js"]) ?>"></script>
    <!-- END PAGE VENDOR JS-->
    
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?= base_url(["assets/js/scripts/dashboard-modern.js"]) ?>"></script>
    <!-- END PAGE LEVEL JS-->
    
</body>

</html>