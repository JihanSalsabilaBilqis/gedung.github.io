<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand">GEDUNG SERBAGUNA PUSRI PALEMBANG</a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark mr-5" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <hr>
                        <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Daftar Pesan
                        </a>
                        <a class="nav-link" href="<?php echo base_url('admin/dataPaket') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-gift"></i></div>
                            Data Paket
                        </a>
                        <!-- <a class="nav-link" href="<?php echo base_url('admin/dataSewa') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            Data Sewa
                        </a>
                        <a class="nav-link" href="<?php echo base_url('admin/dataTransaksi') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-check"></i></div>
                            Data Transaksi
                        </a>
                        <a class="nav-link" href="<?php echo base_url('admin/dataCostumer') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Penyewa
                        </a> -->
                        <a class="nav-link" href="<?php echo base_url('admin/laporan') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                            Laporan
                        </a>
                        <hr>
                        <a class="nav-link text-danger" href="<?php echo base_url('admin/masuk') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            <strong>Keluar</strong>
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Masuk Sebagai :</div>
                    Admin
                </div>
            </nav>
        </div>