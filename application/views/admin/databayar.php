<body>
    <!-- Navigation -->
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
    </nav>

    <!-- Page Content -->
    <div class="container">
        <h1 class="mt-4 mb-3"></h1>
        <div class="row justify-content-center">
            <div class="col-md-6 py-4">
                <center class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-1">Konfirmasi Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('admin/datatransaksi/cekbayar') ?>">
                            <?php foreach ($pesan as $ps) : ?>
                                <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/datatransaksi/downloadbayar/' . $ps->idpesan) ?>">Download Bukti Pembayaran</a>
                                <hr>
                                <div class="custom-control custom-switch my-3">
                                    <input type="hidden" class="custom-control-input" value="<?php echo $ps->idpesan ?>" name="idpesan">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="statusbayar">
                                    <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <?php endforeach; ?>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>