<?php include 'layout/navbar.php';?>

<?php

$produk =  query("SELECT * FROM transaksi WHERE name = '{$_SESSION['name']}'");

?>



<div class="container">

<div class="informasi">
    <h2>Hallo, Salamat datang <?= $_SESSION['name']?> ini dashboard belanjamu</h2> <br><br>

    <p>Status = Proses <br /> Mohon bersabar, Produk kamu sedang di proses admin</p>
    <p>Status = dikirim <br /> Mohon tunggu, Produk kamu sedang dikirim ke alamatmu</p>
    <p>Status = ditolak <br /> Mohon maaf, Produk kamu ditolak</p>
</div>

<div class="data-produk">
<table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga Produk</th>
            <th>Foto Produk</th>
            <th>status</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
       <?php foreach($produk as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["name"]; ?></td>
            <td><?= $data["nama_produk"]; ?></td>
            <td><?= $data["alamat"]; ?></td>
            <td>Rp <?= number_format($data["harga_produk"]); ?></td>
            <td><img src="foto/<?= $data["foto_produk"];?>" width="85px" alt=""></td>
            <td><?= $data['status']?></td>
             <td>
                <a href="detail_transaksi.php?id=<?= $data["id_transaksi"];?>" class="edit">Detail Transaksi</a>
             </td>
        </tr> 
        <?php $i++; ?> 
        <?php endforeach; ?>

    </table>
</div>

</div>