<?php

session_start();



if(!isset($_SESSION["username"])){
    echo "
    <script>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php'   
    </script>
    ";
}

require'function.php';

if (isset($_POST["submit"])) {
    if (editProduk($_POST) > 0 ) {
        echo "
        <script type='text/javascript'>
            alert('Data produk berhasil di ubah');
            window.location = 'produk.php';
        </script>";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal di ubah');
            window.location = 'produk.php';
        </script>";
    }
}

$id = $_GET["id"];
$data = query("SELECT * FROM product WHERE id_produk = $id")[0];

?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    
    <div class="box">
        <h2>Edit Produk</h2>
        <form method="post" enctype="multipart/form-data">

            <input type="hidden" name="id_produk" class="form-control" value="<?=$data['id_produk'];?>" id="">

            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="<?=$data['nama_produk'];?>" ><br /><br />

            <label>Harga Produk</label>
            <input type="text" name="harga_produk" class="form-control" value="<?=$data['harga_produk'];?>"><br /><br />

            <label>Foto Produk</label>
            <input type="file" name="foto_produk" class="form-control" value="<?=$data['foto_produk'];?>"><br /><br />

            <label>Stok Produk</label>
            <input type="text" name="stok_produk" class="form-control" value="<?=$data['stok_produk'];?>"><br /><br />

            <label>Deskripsi Produk</label><br />
            <textarea type="text" name="desk_produk" rows="10" class="form-control">
            <?=$data['desk_produk'];?>
            </textarea><br /><br />
            
            <button type="submit" name="submit">Edit Produk</button>
            
        </form>
    </div>
</div>

