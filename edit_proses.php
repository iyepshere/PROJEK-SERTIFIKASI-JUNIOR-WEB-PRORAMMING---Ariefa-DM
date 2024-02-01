<?php
include "koneksi.php";

if(isset($_POST['edit'])){
    $id_peserta = $_POST['id_peserta'];
    $kd_skema = $_POST['kd_skema'];
    $nm_peserta = $_POST['nm_peserta'];
    $jekel = $_POST['jekel'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $query = "UPDATE tb_peserta SET kd_skema='$kd_skema', nm_peserta='$nm_peserta', jekel='$jekel', alamat='$alamat', no_hp='$no_hp' WHERE id_peserta=$id_peserta";
    $result = mysqli_query($koneksi, $query);
    if($result){
        echo "Data Berhasil Diupdate";
        echo "<meta http-equiv='refresh' content='1; url=index.php'>";        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
mysqli_close($koneksi);
?>
