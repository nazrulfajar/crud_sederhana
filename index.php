<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="icon" href="usu.png">

</head>
<body>
  <!--schedule start-->
  <div class="jumbotron" id="jadwal">
    <div class="container">
      <div class="col-lg-12 text-center mt-5 mb-5">
        <h3 class="display-4">Daftar Mahasiswa</h3>
        <a href="tambah.php"><h4>Tambah Mahasiswa</h4></a>
      </div>
      <table class="table table-striped" style="text-align: center">
        <thead class="table-dark">
          <th>No.</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Gender</th>
          <th>Alamat</th>
          <th>Opsi</th>
        </thead>
        <tbody>
          <?php
          include_once "koneksi.php";
          $no = 1;
          $data = mysqli_query($koneksi,"select *from mahasiswa");
          while ($d = mysqli_fetch_array($data)){
          ?>
          <tr>
            <td> <?php echo $no++ ?></td>
            <td> <?php echo $d['nim'] ?></td>
            <td> <?php echo $d['nama'] ?></td>
            <td> <?php echo $d['gender'] ?></td>
            <td> <?php echo $d['alamat'] ?></td>
            <td>
              <a href="edit.php?nim=<?php echo $d['nim']; ?>" >edit</a>
              <a href="hapus.php?nim=<?php echo $d['nim']; ?>" onclick="return confirm('Yakin Hapus?')">hapus</a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>