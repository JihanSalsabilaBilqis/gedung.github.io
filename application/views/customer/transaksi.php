<body>
    <nav class="sb-topnav navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url('customer/dashboard') ?>">GEDUNG SERBAGUNA PUSRI PALEMBANG</a>
        <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('customer/dashboard/transaksi') ?>">Riwayat Pemesanan</a>
                </li> -->
                <li class="nav-item">
                    <?php if ($this->session->userdata('nama')) { ?>
                        <a class="nav-link" href="<?php echo base_url('auth/masuk/keluar') ?>">Selamat Datang, <?php echo $this->session->userdata('nama') ?> | <strong class="text-danger"> Keluar </strong></a>
                    <?php } else { ?>
                        <a class="nav-link" href="<?php echo base_url('auth/masuk') ?>">Masuk</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <h1 class="mt-4 mb-3">Riwayat Booking Gedung</h1>
        <hr>
        <div class="table-responsive">
            <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan') ?></span>
            <table class="table table-hover table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">NAMA PAKET</th>
                        <th class="text-center">TANGGAL KONTRAK</th>
                        <th class="text-center">TANGGAL ACARA</th>
                        <th class="text-center">WAKTU ACARA</th>
                        <th class="text-center">HARGA</th>
                        <th class="text-center">DP</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pesan as $ps) : ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td class="text-center"><?php echo $ps->namapaket ?></td>
                            <td class="text-center"><?php echo date('d/m/Y', strtotime($ps->tglkontrak)) ?></td>
                            <td class="text-center"><?php echo date('d/m/Y', strtotime($ps->tglacara)) ?></td>
                            <td class="text-center"><?php echo $ps->waktu ?></td>
                            <td class="text-center">Rp. <?php echo number_format($ps->harga, 0, ',', '.') ?></td>
                            <td class="text-center">Rp. <?php echo number_format($ps->dp, 0, ',', '.') ?></td>
                            <td>
                                <center>
                                    <?php if ($ps->statuspesan == "1") { ?>
                                        <button class="btn btn-sm btn-primary">Selesai</button>
                                    <?php } else {  ?>
                                        <a href="<?php echo base_url('customer/dashboard/pembayaran/' . $ps->idpesan) ?>" class="btn btn-sm btn-success">Cek Transaksi</a>
                                    <?php } ?>

                                    <?php
                                    if ($ps->statuspesan == '0') { ?>
                                        <a onclick="return confirm('Yakin ingin membatalkan pemesananan Ini? Uang yang telah dibayar tidak dapat di kembalikan.')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/dashboard/bataltransaksi/' . $ps->idpesan) ?>">Batal</a>
                                    <?php } else { ?>
                                        <button style="width: 100%" type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">Batal </button>
                                    <?php } ?>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Maaf, Transaksi ini sudah selesai.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-sm btn-success" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>