<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
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
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">Cari</button>
                </div>
            </div>
        </form>
    </nav>

    <div class="container">
        <h1 class="mt-4 mb-3">Transaksi Selesai</h1>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6 py-4">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-body">
                        <?php foreach ($pesan as $ps) : ?>
                            <form method="POST" action="<?php echo base_url('admin/dataPaket/tambahdataAksi') ?>">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="hidden" name="idpesan" value="<?php echo $ps->idpesan ?>">
                                        <div class="form-group">
                                            <label>Tanggal Pengunduran Acara</label>
                                            <input type="date" name="tglacara" class="form-control" value="<?php echo $ps->tglacara ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Status Bayar</label>
                                            <select name="status" class="form-control">
                                                <option value="<?php echo $ps->status ?>"><?php echo $ps->status ?></option>
                                                <option value="Lunas">Lunas</option>
                                                <option value="Balum Lunas">Belum Lunas</option>
                                            </select>
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