<?php
    include ("config.php");

    // cek apakah tombol simpan sudah di klik atau belum?
    if(isset($_POST['simpan'])){

        // ambil data dari formulir
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $merek = $_POST['merek'];
        $jumlah = $_POST['jumlah'];
        $kondisi = $_POST['kondisi'];

        // buat query update
        $sql = "UPDATE barang SET nama='$nama', merek='$merek', jumlah='$jumlah', kondisi='$kondisi' WHERE id=$id";
        $query = mysqli_query($db, $sql);
    
        // apakah query update berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman list-siswa.php
            header('Location: list-siswa.php');
        } else {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
        }
    
    
    } else {
        die("Akses dilarang... !!!");
    }
    
    ?>
    }
?>