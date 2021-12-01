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

    <div class="container">
        <h1 class="mt-4 mb-3">Edit Paket Gedung</h1>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6 py-4">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-body">
                        <?php foreach ($paket as $p) : ?>
                            <form method="POST" action="<?php echo base_url('admin/dataPaket/updatedataAksi') ?>">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Nama Paket</label>
                                            <input type="hidden" name="idpaket" class="form-control" value="<?php echo $p->idpaket ?>">
                                            <input type="text" name="namapaket" class="form-control" value="<?php echo $p->namapaket ?>">
                                            <?php echo form_error('namapaket', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Jadwal Acara</label>
                                            <input type="text" name="jadwal" class="form-control" value="<?php echo $p->jadwal ?>">
                                            <?php echo form_error('jadwal', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Paket</label>
                                            <input type="text" name="harga" class="form-control" value="<?php echo $p->harga ?>">
                                            <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>DP</label>
                                            <input type="text" name="dp" class="form-control" value="<?php echo $p->dp ?>">
                                            <?php echo form_error('dp', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>