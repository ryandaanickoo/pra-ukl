<?php
    include("config.php");

    // kalau tidak ada id di query string
    if (!isset($_GET['id']) ){
        header('Location: list-siswa.php');
    }

    // ambil dari query string
    $id = $_GET['id'];

    // buat query untuk diambil data dari databse
    $sql = "SELECT * FROM barang WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data yang di edit tidak ditemukan
    if( mysqli_num_rows($query) <1 ){
        die("data tidak ditemukan ... !!!");
    } 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Telkom Malang</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="merek">Merek: </label>
            <textarea name="merek"><?php echo $siswa['merek'] ?></textarea>
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <textarea name="jumlah"><?php echo $siswa['jumlah'] ?></textarea>
        </p>
        <p>
            <label for="kondisi">Kondisi: </label>
            <?php $agama = $siswa['kondisi']; ?>
            <select name="kondisi">
                <option <?php echo ($agama == 'sangat baik') ? "selected": "" ?>>sangat baik</option>
                <option <?php echo ($agama == 'baik') ? "selected": "" ?>>baik</option>
                <option <?php echo ($agama == 'rusak') ? "selected": "" ?>>rusak</option>
                <option <?php echo ($agama == 'sangat rusak') ? "selected": "" ?>>sangat rusak</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>