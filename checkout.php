<?php include 'layout/navbar.php';?>

<?php

if(empty($_SESSION["cart"] || isset($_SESSION["cart"]))){
    echo "<script>alert('keranjang kosong, silahkan berbelanja terlebih dahulu');
    </script>";

    echo'
        <script type="text/javascript">
        location= "index.php";
        </script>';
}

$totalBelanja = 0; ?>
<?php foreach ($_SESSION['cart'] as $produk => $result) : ?>

<?php $data = query("SELECT * FROM product WHERE id_produk = '$produk'")[0];
$totalHarga = $result * $data["harga_produk"];
?>

<?php endforeach; ?>

<div class="container">
    <form action="" method="post">
    <div class="card-checkout" style="margin-top: 50px">
        <label for="">Nama Penerima</label>
        <input type="text" name="name" class="form-control" value="<?= $_SESSION['name'];?>" id="">
    
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat">

        <label for="">No Handphone</label>
        <input type="text" name="no_hp" class="form-control" id="no_hp">

        <label for="">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" value="<?= $data['nama_produk'];?>" id="">

        <label for="">Harga Satuan</label>
        <input type="text" name="harga_produk" class="form-control" value="<?= number_format($data['harga_produk']);?>" id="">

        <label for="">Sub Total Harga</label>
        <input type="text" name="subtotal" class="form-control" value="<?= $totalHarga = $result * $data['harga_produk'];?>" id="">

        <input type="hidden" name="foto_produk" value="<?= $data['foto_produk'];?>">

        <button type="submit" name="checkout" class="btn-checkout">Kirim</button>
    </div>
    </form>
</div>

<?php
if(isset($_POST['checkout'])){
    if(checkoutProduk($_POST) > 0){
        echo"
        <script>
            alert('Pembelian Sukses!');
            window.location='index.php'
        </script>
        ";
    }else{
        echo mysqli_error($conn);
    }
}

