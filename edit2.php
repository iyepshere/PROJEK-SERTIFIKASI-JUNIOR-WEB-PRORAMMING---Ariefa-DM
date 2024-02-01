<?php
include "koneksi.php";

$id_skema = $_GET['id'];
$query = "SELECT * FROM tb_skema WHERE id_skema = $id_skema";
$result = mysqli_query($koneksi, $query);
if ($result) {
    $data = mysqli_fetch_assoc($result);
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Data Skema Sertifikasi</title>
</head>

<body>

    <form name="edit2" method="post" action="edit_proses2.php">
        <div class="container">
            <h1>Edit Data Skema Sertifikasi</h1>
            <input type="hidden" name="id_skema" value="<?php echo $data['id_skema']; ?>">
            <div class="mb-3">
                <label class="form-label">Kode Skema</label>
                <input type="text" class="form-control" name="kd_skema" value="<?php echo $data['kd_skema']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Skema</label>
                <input type="text" class="form-control" name="nm_skema" value="<?php echo $data['nm_skema']; ?>">
            </div>
            <div class="mb-3">
            <label class="form-label">Jenis</label>
            <select id="jenis" name="jenis">
                <option value="KKNI" <?php if ($data['jenis'] == 'KKNI') echo 'selected'; ?>>KKNI</option>
                <option value="Klaster" <?php if ($data['jenis'] == 'Klaster') echo 'selected'; ?>>Klaster</option>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Unit</label>
                <input type="text" class="form-control" name="jml_unit" value="<?php echo $data['jml_unit']; ?>">
            </div>


            <button type="submit" name="edit2" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
