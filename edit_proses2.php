<?php
include "koneksi.php";

if(isset($_POST['edit2'])){
    $id_skema = $_POST['id_skema'];
    $kd_skema = $_POST['kd_skema'];
    $nm_skema = $_POST['nm_skema'];
    $jenis = $_POST['jenis'];
    $jml_unit = $_POST['jml_unit'];

    $query = "UPDATE tb_skema SET kd_skema='$kd_skema', nm_skema='$nm_skema', jenis='$jenis', jml_unit='$jml_unit' WHERE id_skema=$id_skema";
    $result = mysqli_query($koneksi, $query);
    if($result){
        echo "Data Berhasil Diupdate";
        echo "<meta http-equiv='refresh' content='1; url=sertifikasi.php'>";        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
mysqli_close($koneksi);
?>
