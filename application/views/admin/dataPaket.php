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
    <div class="container-fluid">
        <h1 class="mt-4 mb-3">Paket Gedung</h1>
        <hr>
        <div class="table-responsive">
            <a href="<?php echo base_url('admin/dataPaket/tambahdata') ?>" class="btn btn-dark mb-3 btn-center">+ Data Paket</a>
            <?php echo $this->session->flashdata('pesan') ?>
            <table class="table table-hover table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">NAMA PAKET</th>
                        <th class="text-center">HARGA</th>
                        <th class="text-center">DP</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($paket as $p) : ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td class="text-center"><?php echo $p->namapaket ?></td>
                            <td class="text-center">Rp.<?php echo number_format($p->harga, 0, ',', '.') ?></td>
                            <td class="text-center">Rp.<?php echo number_format($p->dp, 0, ',', '.') ?></td>
                            <td>
                                <center>
                                    <a href="<?php echo base_url('admin/dataPaket/detailData/' . $p->idpaket) ?>" class="btn btn-sm btn-success">Detail</a>
                                    <a href="<?php echo base_url('admin/dataPaket/updateData/' . $p->idpaket) ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a onclick="return confirm('Yakin Dihapus?')" href="<?php echo base_url('admin/dataPaket/hapusData/' . $p->idpaket) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>