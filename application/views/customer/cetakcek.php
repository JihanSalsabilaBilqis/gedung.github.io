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

<table style="width: 50%">
    <h3>Bukti Pemesanan Gedung Serbaguna Pusri Palembang</h3>
    <hr><br>
    <?php foreach ($pesan as $ps) : ?>
        <tr>
            <td>Nama Lengkap</td>
            <td> : </td>
            <td> <?php echo $ps->nama ?></td>
        </tr>
        <tr>
            <td>Nama Pengguna</td>
            <td> : </td>
            <td> <?php echo $ps->username ?></td>
        </tr>
        <tr>
            <td>No. KTP</td>
            <td> : </td>
            <td> <?php echo $ps->noktp ?></td>
        </tr>
        <tr>
            <td>Nama Paket</td>
            <td> : </td>
            <td> <?php echo $ps->namapaket ?></td>
        </tr>
        <tr>
            <td>Waktu Acara</td>
            <td> : </td>
            <td> <?php echo $ps->waktu ?></td>
        </tr>
        <tr>
            <td>Tanggal Kontrak</td>
            <td> : </td>
            <td> <?php echo date('d/m/Y', strtotime($ps->tglkontrak)) ?></td>
        </tr>
        <tr>
            <td>Tanggal Acara</td>
            <td> : </td>
            <td> <?php echo date('d/m/Y', strtotime($ps->tglacara)) ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td> : </td>
            <td> Rp. <?php echo number_format($ps->harga, 0, ',', '.')  ?></td>
        </tr>
        <tr style="font-weight: bold; color: black">
            <td>DP</td>
            <td> : </td>
            <td> Rp. <?php echo number_format($ps->dp, 0, ',', '.') ?></td>
        </tr>
        <!-- <tr>
            <td>Status Bayar</td>
            <td>:</td>
            <td><?php if ($ps->statusbayar == '0') {
                    echo "Belum Lunas";
                } else {
                    echo "Lunas";
                }  ?>
            </td>
        </tr>
        <tr style="font-weight: bold; color: black">
            <td>Jumlah Pembayaran</td>
            <td> : </td>
            <td><?php if ($ps->statusbayar == '0') {
                    echo number_format($ps->harga - $ps->dp, 0, ',', '.');
                } else {
                    echo number_format($ps->harga, 0, ',', '.');
                }  ?>
            </td>
        </tr> -->
    <?php endforeach; ?>
</table>
<br><br>
<table width="100%">
    <tr>
        <td></td>
        <td width="200px"></td>
        <p>Palembang, <?php echo date("d M Y") ?><br> Penyewa, </p>
        <br><br>
        <p style="font-weight: bold; color: black"><?php echo $ps->nama ?></p>
    </tr>
</table>
<hr>
<p text-danger>*Bukti Pemesanan Gedung dibawa saat Tanggal Penandatangan Kontrak Penyewaan Gedung.</p>

<script type="text/javascript">
    window.print();
</script>