<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Detail Paket</title>
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
                        <?php foreach ($detail as $d) : ?>
                            <div class="col">
                                <div class="card shadow-lg border-0 rounded-lg mt-1">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-1">Detail Paket <?php echo $d->namapaket ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <li class="list-group-item">
                                                    dddd
                                                </li>
                                                <li class="list-group-item">
                                                    ddddrrr
                                                </li>
                                            </div>
                                            <div class="col-md-5">
                                                <li class="list-group-item">

                                                </li>
                                                <li class="list-group-item">

                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </main>
        </div>