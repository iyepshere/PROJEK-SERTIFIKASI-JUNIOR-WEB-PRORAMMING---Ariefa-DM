<?php
include 'koneksi.php';
$id_skema = $_GET['id'];
$query = "DELETE FROM tb_skema WHERE id_skema = $id_skema";
$result = mysqli_query($koneksi, $query);
if ($result) {
    echo "Data Berhasil Dihapus";
    echo "<meta http-equiv='refresh' content='1; url=sertifikasi.php'>";    
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
