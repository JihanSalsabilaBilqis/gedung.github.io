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
                            <a class="dropdown-item text-danger" href="<?php echo base_url('auth/masuk/keluar') ?>"><strong>Keluar</strong></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <h1 class="mt-4 mb-3">Laporan Gedung</h1>
        <hr>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
                            <div class="form-group">
                                <label>Dari Tanggal</label>
                                <input type="date" name="dari" class="form-control">
                                <?php echo form_error('dari', '<span class="text-small text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <label>Sampai Tanggal</label>
                                <input type="date" name="sampai" class="form-control">
                                <?php echo form_error('sampai', '<span class="text-small text-danger">', '</span>') ?>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Tampilkan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>