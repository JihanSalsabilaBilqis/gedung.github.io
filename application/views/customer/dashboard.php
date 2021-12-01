<body>
    <nav class="sb-topnav navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">GEDUNG SERBAGUNA PUSRI PALEMBANG</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <?php if ($this->session->userdata('nama')) { ?>
                        <a class="nav-link" href="<?php echo base_url('customer/dashboard/akun') ?>">| Ubah Profil |</a>
                    <?php } else { ?>
                        <a class="nav-link" href=""></a>
                    <?php } ?>
                </li> -->
                <li class="nav-item">
                    <?php if ($this->session->userdata('nama')) { ?>
                        <a class="nav-link" href="<?php echo base_url('customer/dashboard/transaksi') ?>">| Riwayat Pemesanan |</a>
                    <?php } else { ?>
                        <a class="nav-link" href=""></a>
                    <?php } ?>
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
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url(' <?php echo base_url() . '/assets/foto/gedung.jpg'; ?>')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Gedung</h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(' <?php echo base_url() . '/assets/foto/pernikahan.jpg'; ?>')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Pernikahan</h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(' <?php echo base_url() . '/assets/foto/perpisahan.jpg'; ?>')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Pelepasan</h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(' <?php echo base_url() . '/assets/foto/hiburan.jpg'; ?>')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Malam Kesenian</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row py-1">
            <div class="col">
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title text-center">Fasilitas Gedung :</h4>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                            <li>Ruang VIP</li>
                                            <li>Durasi 5 jam</li>
                                            <li>Sound System</li>
                                            <li>Ruang Tunggu</li>
                                            <li>Ruangan Full AC</li>
                                            <li>Standard Lighting</li>
                                            <li>Screen & Projector</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li>Area Free Parkir Luas</li>
                                            <li>Panggung yang lebar</li>
                                            <li>Listrik up to 10.000 watt</li>
                                            <li>Ruangan Ballroom terbuka</li>
                                            <li>Kapasitas max. 1000 orang</li>
                                            <li>Jasa Keamanan & Cleaning Service</li>
                                            <li> Pilihan Jadwal Acara :
                                                <ul>
                                                    <li>pukul 09:00 - 14:00</li>
                                                    <li> pukul 19:00 - 22:00</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title text-center">Kontak :</h4>
                                <hr>
                                <p> Gedung Serbaguna PT. Pupuk Sriwidjaja
                                    <br>Perumahan PT. PUSRI
                                    <br>Jalan Mayor Zen 30118 Palembang
                                    <br>Sumatera Selatan - Indonesia
                                    <br>Telp. (+62) 711 712222
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="card-body">
                            <h4 class="card-title text-center">Paket Gedung :</h4>
                            <hr>
                            <div class="row">
                                <?php foreach ($paket as $p) : ?>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card card-outline-primary">
                                            <h3 class="card-header bg-light text-black"><?php echo $p->namapaket ?></h3>
                                            <div class="card-body">
                                                <div class="display-4">Rp.<?php echo number_format($p->harga, 0, ',', '.') ?></div>
                                                <div class="font-italic">Rp.<?php echo number_format($p->dp, 0, ',', '.') ?></div>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</a>
                                                    <?php if ($this->session->userdata('nama')) { ?>
                                                        <a href="<?php echo base_url('customer/pesan/tambahpesan/' . $p->idpaket) ?>" class="btn btn btn-warning"><strong>Pesan</strong></a>
                                                    <?php } else { ?>
                                                        <a href=""></a>
                                                    <?php } ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Rincian Paket</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card card-outline-primary">
                                                    <div class="card-header">
                                                        <h3 class="text-center font-weight-light my-1">Detail Paket</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <li class="list-group-item">
                                                                    dddd
                                                                </li>
                                                                <li class="list-group-item">
                                                                    ddddrrr
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="card card-outline-primary">
                                        <h3 class="card-header bg-secondary text-black">Silver</h3>
                                        <div class="card-body">
                                            <div class="display-4">Rp.112.000.000</div>
                                            <div class="font-italic">Rp.12.000.000</div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">

                                            </li>
                                            <li class="list-group-item">
                                                <?php if ($this->session->userdata('nama')) { ?>
                                                    <a href="<?php echo base_url('customer/pesan/tambahpesan/' . $p->idpaket) ?>" class="btn btn btn-warning"><strong>Pesan</strong></a>
                                                <?php } else { ?>
                                                    <a href=""></a>
                                                <?php } ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="card card-outline-primary">
                                        <h3 class="card-header bg-warning text-black">Gold</h3>
                                        <div class="card-body">
                                            <div class="display-4">Rp.115.000.000</div>
                                            <div class="font-italic">Rp.15.000.000</div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">

                                            </li>
                                            <li class="list-group-item">
                                                <?php if ($this->session->userdata('nama')) { ?>
                                                    <a href="<?php echo base_url('customer/pesan/tambahpesan/' . $p->idpaket) ?>" class="btn btn btn-warning"><strong>Pesan</strong></a>
                                                <?php } else { ?>
                                                    <a href=""></a>
                                                <?php } ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="card card-outline-primary">
                                        <h3 class="card-header bg-light text-black">Platinum</h3>
                                        <div class="card-body">
                                            <div class="display-4">Rp.125.000.000</div>
                                            <div class="font-italic">Rp.25.000.000</div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">

                                            </li>
                                            <li class="list-group-item">
                                                <?php if ($this->session->userdata('nama')) { ?>
                                                    <a href="<?php echo base_url('customer/pesan/tambahpesan/' . $p->idpaket) ?>" class="btn btn btn-warning"><strong>Pesan</strong></a>
                                                <?php } else { ?>
                                                    <a href=""></a>
                                                <?php } ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>