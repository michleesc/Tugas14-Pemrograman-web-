<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
</head>
<body>
    <h3 align="center">FORM Ubah Data</h3>
    <?php
        //koneksi ke database
        $connection = mysqli_connect("localhost", "root", "", "data_xml") or die("Error " . mysqli_error($connection));
        $nim = $_GET ['nim'];
        $result = mysqli_query($connection, "select * from mahasiswa where NIM ='$nim'");
        while($d = mysqli_fetch_array($result)) {
    ?>
    <form action="updateData.php" method="post">
    <table align="center" width="60%" bgcolor="grey">
        <tr>
            <td>NIM</td>
            <td> : </td>
            <td>
                <input type="text" name="nim" size="20" value="<?php echo $d['NIM']; ?>" readonly>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td> : </td>
            <td>
                <input type="text" name="nama" size="30" value="<?php echo $d['NAMA']; ?>">
            </td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td> : </td>
            <td>
                <input type="text" name="fakultas" size="30" value="<?php echo $d['Fakultas']; ?>">
            </td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td> : </td>
            <td>
                <input type="text" name="prodi" size="30" value="<?php echo $d['Prodi']; ?>">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td> : </td>
            <td>
                <input type="text" name="gender" size="30" value="<?php echo $d['Gender']; ?>">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td>
                <textarea name="alamat" size="255"><?php echo $d['Alamat']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="Ubah">
                <input type="reset" name="batal" value="Batal">
                <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
            </td>
        </tr>
    </table>
    </form>
    <?php
        }
        ?>
</body>
</html>