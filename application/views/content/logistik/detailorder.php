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
                                <a href="<?= base_url('deliveriorder') ?>"><i class="fas fa-play fa-flip-horizontal mr-2"></i></a>
                                <h3 class="card-title">Driver Listing Order</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($order_deliv as $o) :
                                function tanggal_indo($tanggal, $cetak_hari = false)
                                {
                                    $hari = array(
                                        1 =>    'Senin',
                                        'Selasa',
                                        'Rabu',
                                        'Kamis',
                                        'Jumat',
                                        'Sabtu',
                                        'Minggu'
                                    );

                                    $bulan = array(
                                        1 =>   'Januari',
                                        'Februari',
                                        'Maret',
                                        'April',
                                        'Mei',
                                        'Juni',
                                        'Juli',
                                        'Agustus',
                                        'September',
                                        'Oktober',
                                        'November',
                                        'Desember'
                                    );
                                    $split       = explode('-', $tanggal);
                                    $tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

                                    if ($cetak_hari) {
                                        $num = date('N', strtotime($tanggal));
                                        return $hari[$num] . ', ' . $tgl_indo;
                                    }
                                    return $tgl_indo;
                                }

                                $tanggal = date('Y-m-d', strtotime($o->tgl_jalan));
                            ?>
                                <a href="#" class="btn btn-primary mb-2 btn-lg">
                                    <i class="fa fa-solid fa-calendar"></i>
                                    Jadwal Deliveri : <?= tanggal_indo($tanggal, true) ?>
                                </a>
                            <?php endforeach; ?>
                            <table id="tb_det_list_driver_order" class="table table-bordered table-striped" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th>Nama Driver</th>
                                        <th>Nama Truk</th>
                                        <th>Nomor Plat</th>
                                        <th>Destinasi</th>
                                        <th>Nama Toko</th>
                                        <th style="text-align: center;">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($detail as $d) : ?>
                                        <tr>
                                            <th><?= $d->nama_driver ?></th>
                                            <th><?= $d->kd_truk ?></th>
                                            <th><?= $d->noplat ?></th>
                                            <th><?= $d->destinasi ?></th>
                                            <th><?= $d->nm_toko ?></th>
                                            <th style="text-align: center;">
                                                <a href="#" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#maddnotepending<?= $d->idorder ?>">
                                                    <i class="fa fa-solid fa-ban"></i> PENDING <i class="fa fa-solid fa-ban"></i>
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