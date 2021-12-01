<body>
    <nav class="sb-topnav navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">GEDUNG SERBAGUNA PUSRI PALEMBANG</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('customer/dashboard/transaksi') ?>">Riwayat Pesan</a>
                </li>
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
        <div class="row justify-content-center">
            <div class="col">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-1">Pembayaran Gedung</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <?php foreach ($pesan as $ps) : ?>
                                <tr>
                                    <th>Nama Paket</th>
                                    <td> : </td>
                                    <td> <?php echo $ps->namapaket ?></td>
                                </tr>
                                <tr>
                                    <th>Waktu Acara</th>
                                    <td> : </td>
                                    <td> <?php echo $ps->waktu ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kontrak</th>
                                    <td> : </td>
                                    <td> <?php echo date('d/m/Y', strtotime($ps->tglkontrak)) ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Acara</th>
                                    <td> : </td>
                                    <td> <?php echo date('d/m/Y', strtotime($ps->tglacara)) ?></td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td> : </td>
                                    <td> Rp. <?php echo number_format($ps->harga, 0, ',', '.')  ?></td>
                                </tr>
                                <tr>
                                    <th>DP</th>
                                    <td> : </td>
                                    <td class="text-success"><strong>Rp.<?php echo number_format($ps->dp, 0, ',', '.') ?></strong></td>
                                </tr>
                                <!-- <tr class="text-success">
                                    <th>Sisa Pembayaran</th>
                                    <td> : </td>
                                    <td><button class="btn btn-sm btn-success"> Rp. <?php echo number_format($ps->harga - $ps->dp, 0, ',', '.') ?></button></td>
                                </tr> -->
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><a href="<?php echo base_url('customer/dashboard/cetakcek/' . $ps->idpesan) ?>" class="btn btn-sm btn-info"><strong>CETAK</strong></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-header alert alert-primary">
                        <h3 class="text-center font-weight-light my-1">Informasi Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <p>Silahkan Melakukan Pembayaran Melalui Nomor Rekening di bawah ini :</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bank Mandiri : 0123456789</li>
                            <li class="list-group-item">Bank BCA : 0123456789</li>
                            <li class="list-group-item">Bank BNI : 0123456789</li>
                            <li class="list-group-item">Bank BRI : 0123456789</li>
                        </ul>
                        <?php
                        if (empty($ps->buktibayar)) { ?>
                            <button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
                                Upload Bukti Pembayaran</button>
                        <?php } elseif ($ps->statusbayar == '0') { ?>
                            <button style="width: 100%" class="btn btn-sm btn-warning mt-3">Menunggu Konfirmasi</button>
                        <?php } elseif ($ps->statusbayar == '1') { ?>
                            <button style="width: 100%" class="btn btn-sm btn-success mt-3">Pembayaran Selesai</button>
                        <?php } ?>

                        <!-- Modal untuk upload bukti bayar -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="<?php echo base_url('customer/dashboard/pembayaranaksi') ?>" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-grup">
                                                <input type="hidden" name="idpesan" class="form-control" value="<?php echo $ps->idpesan ?>">
                                                <input type="file" name="buktibayar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-sm btn-success">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>