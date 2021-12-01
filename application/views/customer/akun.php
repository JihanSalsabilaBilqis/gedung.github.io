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
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url('customer/dashboard') ?>">GEDUNG SERBAGUNA PUSRI PALEMBANG</a>
</nav>

<body class="bg-white">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 py-4">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-1">Ubah Akun Profil</h3>
                                </div>
                                <div class="card-body">
                                    <?php foreach ($profil as $pr) : ?>
                                        <form method="POST" action="<?php echo base_url('customer/pesan/tambahpesanAksi') ?>">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Nama Lengkap</label>
                                                        <input type="date" name="tglkontrak" class="form-control">
                                                        <?php echo form_error('tglkontrak', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Telepon</label>
                                                        <input type="date" name="tglacara" class="form-control">
                                                        <?php echo form_error('tglacara', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <input type="date" name="tglacara" class="form-control">
                                                        <?php echo form_error('tglacara', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Pengguna</label>
                                                        <input type="hidden" name="idpaket" value="<?php echo $ps->idpaket ?>">
                                                        <input type="text" name="namapaket" class="form-control" value="<?php echo $ps->namapaket ?>" readonly>
                                                        <?php echo form_error('namapaket', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kata Sandi</label>
                                                        <input type="text" name="jadwal" class="form-control" value="<?php echo $ps->jadwal ?>" readonly>
                                                        <?php echo form_error('jadwal', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-primary">Pesan Gedung</button>
                                        </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>