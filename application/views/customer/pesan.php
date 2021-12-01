<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Penyewaan Gedung</title>
    <link href="<?php echo base_url('assets/assets_admin/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<nav class="sb-topnav navbar navbar-expand navbar-dark
 bg-dark">
    <a class="navbar-brand" href="<?php echo base_url('customer/dashboard') ?>">GEDUNG SERBAGUNA PUSRI PALEMBANG</a>
</nav>

<body class="bg-white">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 py-4">
                            <div class="card shadow-lg border-0 rounded-lg mt-1">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-1">Pemesanan Gedung</h3>
                                </div>
                                <div class="card-body">
                                    <?php if ($this->session->flashdata('pesan-alert')) { ?>
                                        <span id="pesan"><?php echo $this->session->flashdata('pesan-alert') ?></span>
                                    <?php } ?>
                                    <?php foreach ($pesan as $ps) : ?>
                                        <form method="POST" action="<?php echo base_url('customer/pesan/tambahpesanAksi') ?>">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="text-center">
                                                        Cek tanggal antrian yang sudah di Booking, <a href="" class="alert-link" data-toggle="modal" data-target="#exampleModal">disini.</a>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                                            <label>Nama Paket</label>
                                                            <input type="hidden" name="idpaket" value="<?php echo $ps->idpaket ?>">
                                                            <input type="text" name="namapaket" class="form-control" value="<?php echo $ps->namapaket ?>" readonly>
                                                            <?php echo form_error('namapaket', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                                            <label>Harga Paket</label>
                                                            <input type="text" name="harga" class="form-control" value="Rp.<?php echo number_format($ps->harga, 0, ',', '.') ?>" readonly>
                                                            <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                                            <label>DP</label>
                                                            <input type="text" name="dp" class="form-control" value="Rp.<?php echo number_format($ps->dp, 0, ',', '.') ?>" readonly>
                                                            <?php echo form_error('dp', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label>Nama Acara</label>
                                                            <input type="text" name="acara" class="form-control">
                                                            <?php echo form_error('acara', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Waktu Acara</label>
                                                            <select name="waktu" class="form-control">
                                                                <option value="">--Pilih Waktu Acara--</option>
                                                                <option value="Pagi">Pagi (09:00 - 14:00 WIB)</option>
                                                                <option value="Malam">Malam (19:00 - 22:00 WIB)</option>
                                                                <?php echo form_error('waktu', '<div class="text-small text-danger">', '</div>') ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label>Tanggal Kontrak</label>
                                                            <input type="date" name="tglkontrak" class="form-control">
                                                            <?php echo form_error('tglkontrak', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Tanggal Pelaksanaan</label>
                                                            <input type="date" name="tglacara" class="form-control">
                                                            <?php echo form_error('tglacara', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label>Dekorasi Tambahan :</label>
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sml btn-block">Pesan Gedung</button>
                                        </form>
                                    <?php endforeach; ?>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tanggal Antrian</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">NO</th>
                                                                <th class="text-center">TANGGAL KONTRAK</th>
                                                                <th class="text-center">TANGGAL ACARA</th>
                                                                <th class="text-center">WAKTU ACARA</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no = 1;
                                                            foreach ($booking as $bk) : ?>
                                                                <tr>
                                                                    <td class="text-center"><?php echo $no++ ?></td>
                                                                    <td class="text-center"><?php echo date('d/m/Y', strtotime($bk->tglkontrak)) ?></td>
                                                                    <td class="text-center"><?php echo date('d/m/Y', strtotime($bk->tglacara)) ?></td>
                                                                    <td class="text-center"><?php echo $bk->waktu ?></td>
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
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                window.setTimeout(function() {
                    $("#pesan").fadeTo(500, 0).slideUp(500, function() {
                        $(this).remove();
                    });
                }, 3000);
            });
        </script>