<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register Akun</title>
    <link href="<?php echo base_url('assets/assets_admin/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand">GEDUNG SERBAGUNA PUSRI PALEMBANG</a>
</nav>

<body class="bg-white">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 py-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-1">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-1">Registrasi Akun</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?php echo base_url('customer/register') ?>">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input id="nama" class="form-control" type="text" name="nama">
                                                    <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nohp">Telepon</label>
                                                    <input id="nohp" class="form-control" type="text" name="nohp">
                                                    <?php echo form_error('nohp', '<div class="text-small text-danger">', '</div>') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input id="alamat" class="form-control" type="text" name="alamat">
                                                    <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="noktp">No. KTP</label>
                                                    <input id="noktp" class="form-control" type="text" name="noktp">
                                                    <?php echo form_error('noktp', '<div class="text-small text-danger">', '</div>') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="username">Nama Pengguna</label>
                                                    <input id="username" class="form-control" type="text" name="username">
                                                    <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Kata Sandi</label>
                                                    <input id="password" class="form-control" type="password" name="password">
                                                    <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-sml btn-block">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="<?php echo base_url('auth/masuk') ?>">Sudah Punya Akun? Masuk !</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>