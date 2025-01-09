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
                        <div class="card-body">
                            <div class="col mb-2">
                                <h2>Upload CSV</h2>
                                <?php if (isset($error)) { ?>
                                    <p style="color: red;"><?php echo $error; ?></p>
                                <?php } ?>

                                <?php if (isset($success)) { ?>
                                    <p style="color: green;"><?php echo $success; ?></p>
                                <?php } ?>

                                <?php echo form_open_multipart('process-csv'); ?>
                                <input type="file" name="csv_file" required>
                                <button type="submit">Upload</button>
                                <?php echo form_close(); ?>
                            </div>
                            <table class="table table-bordered table-striped mb-2 ">
                                <thead style="background-color: #212529; color:white;">
                                    <tr>
                                        <td>Nama Suplier</td>
                                        <td>Nama Barang</td>
                                        <td>Satuan Unit</td>
                                        <td>QTY</td>
                                        <td>QTY-MINIMUM</td>
                                        <td>BOX</td>
                                        <td>PCS</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($stock as $s) : ?>
                                        <tr>
                                            <td><?= $s->suplier ?></td>
                                            <td><?= $s->namabarang ?></td>
                                            <td><?= $s->satuan ?></td>
                                            <td><?= $s->qty ?></td>
                                            <td>0</td>
                                            <td><?= $s->qty_box ?></td>
                                            <td><?= $s->qty_pcs ?></td>
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