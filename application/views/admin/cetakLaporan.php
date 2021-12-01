<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        body {
            font-family: Arial;
            color: black;
        }
    </style>
</head>

<h2 style="text-align: center">Laporan Penyewaan Gedung Serbaguna Pusri Palembang</h2>
<hr><br>
<table>
    <tr>
        <td>Dari Tanggal</td>
        <td> : </td>
        <td><?php echo date('d-M-Y', strtotime($_GET['dari'])) ?></td>
    </tr>
    <tr>
        <td>Sampai Tanggal</td>
        <td> : </td>
        <td><?php echo date('d-M-Y', strtotime($_GET['sampai'])) ?></td>
    </tr>
</table>

<table class="table table-hover table-striped table-bordered mt-4" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NAMA LENGKAP</th>
            <th class="text-center">TELEPON</th>
            <th class="text-center">NAMA PAKET</th>
            <th class="text-center">WAKTU ACARA</th>
            <th class="text-center">TANGGAL KONTRAK</th>
            <th class="text-center">TANGGAL ACARA</th>
            <th class="text-center">HARGA PAKET</th>
            <th class="text-center">DP</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($lapor as $lp) : ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $lp->nama ?></td>
                <td class="text-center"><?php echo $lp->nohp ?></td>
                <td class="text-center"><?php echo $lp->namapaket ?></td>
                <td class="text-center"><?php echo $lp->jadwal ?></td>
                <td class="text-center"><?php echo date('d/m/Y', strtotime($lp->tglkontrak)) ?></td>
                <td class="text-center"><?php echo date('d/m/Y', strtotime($lp->tglacara)) ?></td>
                <td class="text-center">Rp. <?php echo number_format($lp->harga, 0, ',', '.') ?></td>
                <td class="text-center">Rp. <?php echo number_format($lp->dp, 0, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<table width="100%">
    <tr>
        <td></td>
        <td>
            <p>Palembang, <?php echo date("d M Y") ?><br>Admin</p>
            <br><br><br>
            <p>______________________</p>
        </td>
        <td width="200px">
            <p><br> Penanggungjawab Gedung </p>
            <br><br><br>
            <p>______________________</p>
        </td>
    </tr>
</table>

<script type="text/javascript">
    window.print();
</script>