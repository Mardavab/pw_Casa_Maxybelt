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
                        <!-- <?= var_dump(menu()) ?> -->
                        <!-- Current balance & total transactions cards-->
                        <div class="row vertical-modern-dashboard">
                            <div class="col s12 m4 l4">
                                <!-- Current Balance -->
                                <div class="card animate fadeLeft">
                                    <div class="card-content">
                                        <h6 class="mb-0 mt-0 display-flex justify-content-between">Current Balance <i class="material-icons float-right">more_vert</i>
                                        </h6>
                                        <p class="medium-small">This billing cycle</p>
                                        <div class="current-balance-container">
                                            <div id="current-balance-donut-chart" class="current-balance-shadow"></div>
                                        </div>
                                        <h5 class="center-align">$ 50,150.00</h5>
                                        <p class="medium-small center-align">Used balance this billing cycle</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m8 l8 animate fadeRight">
                                <!-- Total Transaction -->
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title mb-0">Total Transaction <i class="material-icons float-right">more_vert</i></h4>
                                        <p class="medium-small">This month transaction</p>
                                        <div class="total-transaction-container">
                                            <div id="total-transaction-line-chart" class="total-transaction-shadow"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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