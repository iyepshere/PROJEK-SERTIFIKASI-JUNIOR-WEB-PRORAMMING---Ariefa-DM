<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Pendaftaran Peserta Sertifikasi</title>
  </head>
  <body>

<form name="tambah"method="post"action="tambah_proses.php" enctype="multipart/form-data">
               <div class="container">
                              <h1> Form Pendaftaran Sertifikasi </h1>
               <div class="mb-3">
                            <label>Kode Skema:</label>
                            <select name="kd_skema" required>
                              <option value="SKM-001">SKM-001 - Junior Web Developer</option>
                              <option value="SKM-002">SKM-002 - Digital Marketing</option>
                              <option value="SKM-003">SKM-003 - Desainer Multimedia Muda</option>
                              <option value="SKM-004">SKM-004 - Network Administrator Muda</option>
                            </select><br>               
              </div>  
               <div class="mb-3">
                              <label class="form-label">Nama Peserta</label>
                              <input type="text"class="form-control"name="nm_peserta">
               </div>
               <div class="mb-3">
                              <label>Jenis Kelamin:</label>
                              <select name="jekel" required>
                              <option value="Laki-laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                              </select><br>
              </div>
              <div class="mb-3">
                              <label>Alamat:</label>
                              <textarea name="alamat" required></textarea><br>
              </div>
              <div class="mb-3">
                              <label>No HP:</label>
                              <input type="text" name="no_hp" required /><br>
              </div>

               <button type="submit"name="tambah"class ="btn btn-primary">submit</button>
               </form>

               <a href="index.php">Kembali ke Home</a>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>