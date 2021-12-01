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
                        <hr>
                        <div class="btn-group">
                            <a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url() . 'admin/laporan/cetakLaporan/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>">CETAK</a>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-hover table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">NO</th>
                                        <th class="text-center">NAMA LENGKAP</th>
                                        <th class="text-center">TELEPON</th>
                                        <th class="text-center">NAMA PAKET</th>
                                        <th class="text-center">WAKTU ACARA</th>
                                        <th class="text-center">TANGGAL KONTRAK</th>
                                        <th class="text-center">TANGGAL ACARA</th>
                                        <th class="text-center">HARGA PAKET</th>
                                        <th class="text-center">DP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($lapor as $lp) : ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td class="text-center"><?php echo $lp->nama ?></td>
                                            <td class="text-center"><?php echo $lp->nohp ?></td>
                                            <td class="text-center"><?php echo $lp->namapaket ?></td>
                                            <td class="text-center"><?php echo $lp->jadwal ?></td>
                                            <td class="text-center"><?php echo date('d/m/Y', strtotime($lp->tglkontrak)) ?></td>
                                            <td class="text-center"><?php echo date('d/m/Y', strtotime($lp->tglacara)) ?></td>
                                            <td class="text-center">Rp. <?php echo number_format($lp->harga) ?></td>
                                            <td class="text-center">Rp. <?php echo number_format($lp->dp, 0, ',', '.') ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>