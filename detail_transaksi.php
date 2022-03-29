<?php include 'layout/navbar.php';?>

<?php

$produk =  query("SELECT * FROM transaksi WHERE name = '{$_SESSION['name']}'");

?>

<?php

$id = $_GET['id'];
$transaksi = query("SELECT * FROM transaksi WHERE id_transaksi = '$id'")[0];
?>


<div class="container">
<div class="detail_transaksi">
        <div class="foto">
            <img src="foto/<?= $transaksi['foto_produk'];?>" alt="" width="250px">
        </div>

        <div class="transaksi">
            <h3>Nama Pembeli : <?= $transaksi["name"]; ?></h3>
            <h3>Alamat : <?= $transaksi["alamat"]; ?></h3>
            <h3>No Hp : <?= $transaksi["no_hp"]; ?></h3>
            <h3>Nama Produk : <?=  $transaksi["nama_produk"]; ?></h3>
            <h3>Harga Produk : <?= number_format($transaksi["harga_produk"]); ?></h3>
            <h3>Subtotal Harga : <?= number_format($transaksi["subtotal"]); ?></h3>
            <h3>Status : <?= $transaksi["status"]; ?></h3>
        </div>
        <?php

if($transaksi["status"] == "proses"){
    ?>
    <?php
}elseif($transaksi["status"] == "dikirim"){
    ?>
    <div class="dikirim"><?= $transaksi['status'] ?></div>
    <?php
}elseif($transaksi["status"] == "ditolak"){
    ?>
    <div class="ditolak"><?= $transaksi['status'] ?></div>
    <?php
}
?>
</div>
</div>

</div>