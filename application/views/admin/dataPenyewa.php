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
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Penyewa Gedung</h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">NAMA LENGKAP</th>
                        <th class="text-center">TELEPON</th>
                        <th class="text-center">ALAMAT</th>
                        <th class="text-center">NO. KTP</th>
                        <th class="text-center">NAMA PENGGUNA</th>
                        <th class="text-center">KATA SANDI</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($user as $u) : ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td class="text-center"><?php echo $u->nama ?></td>
                            <td class="text-center"><?php echo $u->nohp ?></td>
                            <td class="text-center"><?php echo $u->alamat ?></td>
                            <td class="text-center"><?php echo $u->noktp ?></td>
                            <td class="text-center"><?php echo $u->username ?></td>
                            <td class="text-center"><?php echo $u->password ?></td>
                            <td>
                                <center>
                                    <!-- <a href="<?php echo base_url('admin/dataPenyewa/updateData/' . $u->iduser) ?>" class="btn btn-sm btn-primary">Edit</a> -->
                                    <a onclick="return confirm('Yakin ingin menghapus data penyewa ini? Data yang telah dihapus, tidak dapat dikembalikan lagi.')" href="<?php echo base_url('admin/dataPenyewa/hapusData/' . $u->iduser) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>