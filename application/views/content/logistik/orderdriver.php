<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url('assets/images/Karisma.png') ?>" alt="AdminLTELogo" height="150" width="300">
        </div>

        <?php $this->load->view('partial/main/navbar') ?>
        <?php $this->load->view('partial/main/sidebar') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <a href="<?= base_url('dashboard') ?>"><i class="fas fa-play fa-flip-horizontal mr-2"></i></a>
                                <h3 class="card-title">Order Listing</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="ml-2">
                                <a href="<?= base_url('tambahorderdriver') ?>" class="btn btn-primary m-2 ml-3">
                                    <i class="fas fa-plus"></i>
                                    Add Deliveri Order
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                            <div>
                                <a href="<?= base_url('driver_pending') ?>" class="btn btn-primary m-2 ml-3">
                                    <i class="fas fa-ban"></i>
                                    Driver Pending
                                    <i class="fas fa-ban"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="tb_list_order" class="table table-bordered table-striped" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th>Kode Order</th>
                                        <th>Tanggal Order</th>
                                        <th>Jumlah Driver</th>
                                        <th>Jumlah Destinasi Kota</th>
                                        <th>Jumlah Kunjungan Toko</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($deliveri as $d) : ?>
                                        <tr>
                                            <th><?= $d->kd_order ?></th>
                                            <th><?= format_indo($d->tgl_jalan) ?></th>
                                            <th> <?= $d->jml_driver ?></th>
                                            <th> <?= $d->jml_destinasi ?></th>
                                            <th> <?= $d->jml_toko ?></th>
                                            <th>
                                                <a href="<?= base_url('detail_deliveri/') . $d->kd_order ?>" class="btn btn-primary btn-block btn-sm">
                                                    <i class="fa fa-solid fa-search"></i>
                                                </a>
                                            </th>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://kiu.co.id">PT.KARISMA INDOARGO UNIVERSAL</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->