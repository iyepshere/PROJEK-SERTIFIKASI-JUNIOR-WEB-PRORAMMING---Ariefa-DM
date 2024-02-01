<?php

               include "koneksi.php";
               if(isset($_POST['tambah'])){
               $kd_skema = $_POST['kd_skema'];
               $nm_peserta = $_POST['nm_peserta'];
               $jekel = $_POST['jekel'];
               $alamat = $_POST['alamat'];
               $no_hp = $_POST['no_hp'];
               $query = "INSERT INTO tb_peserta (kd_skema, nm_peserta, jekel, alamat, no_hp) VALUES ('$kd_skema', '$nm_peserta', '$jekel', '$alamat', '$no_hp')";
               $result = mysqli_query($koneksi, $query);
                if($result){
                  echo "Data Berhasil Ditambahkan";
                  echo "<meta http-equiv='refresh' content='1; url=index.php'>";                   
                 
               } else {
               echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

?>
