<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Manajemen Data Skema Sertifikasi</title>
  </head>
  <body>

<form name="tambah1"method="post"action="tambah_proses2.php" enctype="multipart/form-data">
               <div class="container">
                              <h1> Tambah Data Skema </h1>
               <div class="mb-3">
                              <label class="form-label">Kode Skema</label>
                              <input type="text"class="form-control"name="kd_skema">
               </div>
               <div class="mb-3">
                              <label class="form-label">Nama Skema</label>
                              <input type="text"class="form-control"name="nm_skema">
               </div>
               <div class="mb-3">
                              <label class="form-label">Jenis</label>
                              <select name="jenis" required>
                                <option value="KKNI">KKNI</option>
                                <option value="Klaster">Klaster</option>
                                </select><br>
                </div>
                <div class="mb-3">
                  <label class="form-label">Jumlah Unit</label>
                  <input type="text"class="form-control"name="jml_unit">
                </div>

               <button type="submit"name="tambah1"class ="btn btn-primary">submit</button>
               </form>
               <a href="sertifikasi.php">Kembali</a>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>