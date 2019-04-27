<!DOCTYPE html>
<html>
<head>
    <title>Data Inventaris</title>
    <link rel=stylesheet href="assets/bootstrap/css/bootstrap.min.css">
    <link rel=stylesheet href="assets/css/style.form.css">
</head>

<body>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
        <section id="input-form">
        <div id="background">
        <div class=form>
            <label for="nama">Nama Barang: </label>
            <input class="form-control form-control-lg" name="nama" type="text" placeholder="Nama">
</div>
        <div class="form">
            <label for="alamat">Merek Barang: </label>
            <input class="form-control form-control-lg" name="merek" type="text" placeholder="Merek">
</div>
<div class="form">
            <label for="alamat">Jumlah Barang: </label>
            <input class="form-control form-control-lg" name="jumlah" type="text" placeholder="Jumlah">
</div>
        <div class="form">
            <label for="agama">Kondisi: </label>
            <select class="form-control form-control-lg" name="kondisi" placeholder="AGAMA">
                <option value="sangat bagus">Sangat Bagus</option>
                <option value="bagus">Bagus</option>
                <option value="rusak">Rusak</option>
                <option value="sangat rusak">Sangat Rusak</option>
            </select>
</div>
        <div class="form">
            <input type="submit" value="Daftar" name="daftar" />
</div>

            </fieldset>
        </div>
    </form>
</section>
    </body>
</html>
