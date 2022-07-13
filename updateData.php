<?php
    //koneksi ke database
    $connection = mysqli_connect("localhost", "root", "", "data_xml") or die("Error " . mysqli_error($connection));

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $update = mysqli_query($connection, "update mahasiswa set NAMA='$nama', Fakultas='$fakultas', Prodi='$prodi', Gender='$gender', Alamat='$alamat' where NIM = '$nim'");

    if ($update){
        echo "<script> alert ('Data berhasil diupdate')</script>";
        header ("refresh:0;index.php");
    }else {
        echo "<script> alert ('Data tidak berhasil diupdate')</script>";
        header ("refresh:0;index.php");
    }
?>