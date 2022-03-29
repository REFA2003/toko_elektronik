<?php

require '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "UPDATE transaksi SET status='dikirim' where id_transaksi = '$id'");

if($query){
    echo "<script type='text/javascript'>
    alert('Data Berhasil Di verifikasi')
    window.location = 'transaction.php'
</script>
";
}

?>