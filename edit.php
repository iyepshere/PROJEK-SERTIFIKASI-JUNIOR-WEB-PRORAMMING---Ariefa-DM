<?php
include "koneksi.php";

$id_peserta = $_GET['id'];
$query = "SELECT * FROM tb_peserta WHERE id_peserta = $id_peserta";
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

    <title>Edit Data Peserta</title>
</head>

<body>

    <form name="edit" method="post" action="edit_proses.php">
        <div class="container">
            <h1>Edit Data Peserta</h1><br>
            <input type="hidden" name="id_peserta" value="<?php echo $data['id_peserta']; ?>">
            <div class="mb-3">
                <label class="form-label">Kode Skema</label><br>
                <select id="kd_skema" name="kd_skema"><br>
                <option value="SKM-001" <?php if ($data['kd_skema'] == 'SKM-001') echo 'selected'; ?>>SKM-001 - Junior Web Developer</option>
                <option value="SKM-002" <?php if ($data['kd_skema'] == 'SKM-002') echo 'selected'; ?>>SKM-002 - Digital Marketing</option>
                <option value="SKM-003" <?php if ($data['kd_skema'] == 'SKM-003') echo 'selected'; ?>>SKM-003 - Desainer Multimedia Muda</option>
                <option value="SKM-004" <?php if ($data['kd_skema'] == 'SKM-004') echo 'selected'; ?>>SKM-004 - Network Administrator Muda</option><br>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Peserta</label>
                <input type="text" class="form-control" name="nm_peserta" value="<?php echo $data['nm_peserta']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select id="jekel" name="jekel">
                <option value="Laki-laki" <?php if ($data['jekel'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if ($data['jekel'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" class="form-control" name="no_hp" value="<?php echo $data['no_hp']; ?>">
            </div>

            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
