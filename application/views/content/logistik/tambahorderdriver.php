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
                                <h3 class="card-title">Delivery Order</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php echo form_open_multipart('addorderdeliv'); ?>
                            <div id="kodeawal">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="noInv" class="">Kode Order</label>
                                        <input type="text" id="kd_order_i" name="kd_order_i" value="" class="form-control">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="noInv" class="">Tanggal Order</label>
                                        <input type="date" id="tgl_deliv_i" name="tgl_deliv_i" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div id="driveroption">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="noInv" class="">Nama Driver</label>
                                        <input type="text" id="nm_driver_i[]" name="nm_driver_i[]" value="" class="form-control">
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="noInv" class="">Kode Truk</label>
                                        <input type="text" id="kd_truk_i[]" name="kd_truk_i[]" value="" class="form-control">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="noInv" class="">Destinasi Kota</label>
                                        <input type="text" id="destinsasi_i[]" name="destinsasi_i[]" value="" class="form-control">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="noInv" class="">Nama Toko</label>
                                        <input type="text" id="nm_toko_i[]" name="nm_toko_i[]" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <label for="noInv" class=""></label><br>
                            <button type="button" name="add" id="add" class="btn btn-success btn-block"> <i class="fas fa-plus"></i></button>
                            <button type="submit" class="btn btn-primary btn-block">Simpan Data </button>
                            </form>
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