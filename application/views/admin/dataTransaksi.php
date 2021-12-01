<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand">GEDUNG SERBAGUNA PUSRI PALEMBANG</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selamat Datang, Admin!
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
                            <a class="dropdown-item" href="<?php echo base_url('admin/beranda') ?>">Data Booking Gedung</a>
                            <a class="dropdown-item" href="<?php echo base_url('admin/dataPaket') ?>">Data Paket</a>
                            <a class="dropdown-item" href="<?php echo base_url('admin/dataPenyewa') ?>">Data Penyewa</a>
                            <a class="dropdown-item" href="<?php echo base_url('admin/dataTransaksi') ?>">Data Transaksi</a>
                            <a class="dropdown-item" href="<?php echo base_url('admin/laporan') ?>">Laporan</a>
                            <hr>
                            <a class="dropdown-item text-danger" href="<?php echo base_url('auth/masuk') ?>"><strong>Keluar</strong></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="POST" action="<?php echo base_url('admin/datatransaksi/cari') ?>">
            <div class="input-group">
                <input class="form-control" name="keyword" type="text">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </nav>
    <div class="container-fluid">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Transaksi Penyewa</h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered" id="tabledata" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">NAMA LENGKAP</th>
                        <th class="text-center">NAMA PAKET</th>
                        <th class="text-center">WAKTU ACARA</th>
                        <th class="text-center">HARGA PAKET</th>
                        <th class="text-center">DP</th>
                        <th class="text-center">TRANSAKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pesan as $ps) : ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td class="text-center"><?php echo $ps->nama ?></td>
                            <td class="text-center"><?php echo $ps->namapaket ?></td>
                            <td class="text-center"><?php echo $ps->jadwal ?></td>
                            <td class="text-center">Rp. <?php echo number_format($ps->harga, 0, ',', '.') ?></td>
                            <td class="text-center">Rp. <?php echo number_format($ps->dp, 0, ',', '.') ?></td>
                            <td>
                                <center>
                                    <?php
                                    if (empty($ps->buktibayar)) { ?>
                                        <button class="btn btn-sm btn-danger">Transaksi Belum Dikirim</button>
                                    <?php } else { ?>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/datatransaksi/pembayaran/' . $ps->idpesan) ?>">Lihat Transaksi</a>
                                    <?php } ?>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.js"></script>
    <script>
        $(document).ready(function() {
            console.log("test");
            $('#tabledata1').DataTable();
        });
    </script> -->