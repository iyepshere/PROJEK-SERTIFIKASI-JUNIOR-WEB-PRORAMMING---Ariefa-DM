<?php
include 'koneksi.php';
$id_peserta = $_GET['id'];
$query = "DELETE FROM tb_peserta WHERE id_peserta = $id_peserta";
$result = mysqli_query($koneksi, $query);
if ($result) {
    echo "Data Berhasil Dihapus";
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";    
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
