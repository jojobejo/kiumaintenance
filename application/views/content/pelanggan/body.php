<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url('assets/images/Karisma.png') ?>" alt="AdminLTELogo" height="150" width="300">
        </div>


        <div class="content-wrapper">

            <!-- Main content -->
            <div class="content">
                <?php date_default_timezone_set('Asia/Jakarta');  ?>
                <div class="container">
                    <h3 style="text-align: center;" class="judul">Bagaimana kepuasan anda terhadap pelayanan kami ?</h3>
                    <input type="text" value="<?= date("Y-m-d") ?>" name="tglinput" id="tglinput" hidden>
                    <input type="text" value="<?= date("H:i") ?>" name="jminput" id="" hidden>
                    <div class="row divgbrindek" style="text-align: center;">
                        <div class="col-md boxgbr">
                            <a href="<?= base_url('nilai_ipkp/1') ?>" class="tmbl1">1</a>
                        </div>
                        <div class="col-md">
                            <a href="<?= base_url('nilai_ipkp/2') ?>" class="tmbl1">2</a>
                        </div>
                        <div class="col-md">
                            <a href="<?= base_url('nilai_ipkp/3') ?>" class="tmbl1">3</a>
                        </div>
                        <div class="col-md">
                            <a href="<?= base_url('nilai_ipkp/4') ?>" class="tmbl1">4</a>
                        </div>
                        <div class="col-md">
                            <a href="<?= base_url('nilai_ipkp/5') ?>" class="tmbl1">5</a>
                        </div>
                    </div>
                    <div>
            
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>


        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>