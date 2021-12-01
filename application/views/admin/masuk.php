<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Masuk Akun</title>
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
                        <div class="col-lg-5 py-4">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-1">Silahkan Masuk</h3>
                                </div>
                                <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
                                <div class="card-body">
                                    <form method="POST" action="<?php echo base_url('auth/masuk') ?>">
                                        <div class="form-group">
                                            <label for="username">Nama Pengguna</label>
                                            <input id="username" type="text" name="username" class="form-control" tabindex="1" autofocus>
                                            <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="control-label">Kata Sandi</label>
                                            <input id="password" type="password" name="password" class="form-control" tabindex="2">
                                            <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <hr>
                                        <div class="form-group mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-sml btn-block" tabindex="3">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="<?php echo base_url('customer/register') ?>">Belum punya akun? Register !</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>