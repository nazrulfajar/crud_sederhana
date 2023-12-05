<?php
  include 'koneksi.php';
	$nim = $_GET['nim'];
	$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa where nim=$nim LIMIT 1") or die ("Koneksi ke database gagal");
  $d = mysqli_fetch_array($query);
	?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>E-Learning USU</title>
        <link rel="icon" href="usu.png">
    </head>
    <!-- edit -->
    <body>
        <h3>
            <a href="index.php">kembali</a><br>
            <p>Edit data mahasiswa</p>
        </h3>
        <form action="edit_proses.php" method="post">
            <table>
                <input type="hidden" name="pnim" value="<?= $d['nim'] ?>" >
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="number" name="nim" value="<?= $d['nim'] ?>" required> </td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $d['nama'] ?>" required> </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                    <select name="gender" required>
                        <option>Gender</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                        </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?= $d['alamat'] ?>" required> </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="edit" value="Simpan">  </td>
                </tr>
            </table>
        </form>
    </body>
</html>