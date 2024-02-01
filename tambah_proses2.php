<?php

               include "koneksi.php";
               if(isset($_POST['tambah1'])){
               $kd_skema = $_POST['kd_skema'];
               $nm_skema = $_POST['nm_skema'];
               $jenis = $_POST['jenis'];
               $jml_unit = $_POST['jml_unit'];
               $query = "INSERT INTO tb_skema (kd_skema, nm_skema, jenis, jml_unit) VALUES ('$kd_skema', '$nm_skema', '$jenis', '$jml_unit')";
               $result = mysqli_query($koneksi, $query);
                if($result){
                  echo "Data Berhasil Ditambahkan";
                  echo "<meta http-equiv='refresh' content='1; url=sertifikasi.php'>";                  
               } else {
               echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

?>
