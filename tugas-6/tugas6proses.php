<?php
if (isset($_POST['jenkel'])) {
   $jenkel = $_POST['jenkel'];
} else {
   $jenkel = "<b><i>Belum Memilih Jenis Kelamin.</b></i>";
}
$data = [
   'nama'       => $_POST['nama'],
   'alamat'     => $_POST['alamat'],
   'tptlahir'   => $_POST['tptlahir'],
   'tgllahir'   => $_POST['tgllahir'],
   'jenkel'     => $jenkel,
   'pendidikan' => $_POST['pendidikan'],
];
?>
<!DOCTYPE html>
<html>

<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <title>Tugas 6 | Data Registrasi</title>
</head>

<body style="background: #f1f1f1;">
   <div class="container">
      <div class="row">
         <div class="col">
            <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 50%">
               <h3 class="card-title m-2"><b>Data Registrasi</b></h3>
               <hr>
               <table class="table">
                  <tr>
                     <th style="width: 25%;">Nama</th>
                     <td><?php echo ($data['nama'] === "") ? '<b><i>Belum Menginput Nama.</b></i>' : $data['nama']; ?></td>
                  </tr>
                  <tr>
                     <th>Alamat</th>
                     <td><?php echo ($data['alamat'] === "") ? '<b><i>Belum Menginput Alamat.</b></i>' : $data['alamat']; ?></td>
                  </tr>
                  <tr>
                     <th>Tempat Lahir</th>
                     <td><?php echo ($data['tptlahir'] === "") ? '<b><i>Belum Menginput Tempat Lahir.</b></i>' : $data['tptlahir']; ?></td>
                  </tr>
                  <tr>
                     <th>Tanggal Lahir</th>
                     <td><?php echo ($data['tgllahir'] === "") ? '<b><i>Belum Menginput Tanggal Lahir.</b></i>' : $data['tgllahir']; ?></td>
                  </tr>
                  <tr>
                     <th>Jenis Kelamin</th>
                     <td><?php echo $data['jenkel']; ?></td>
                  </tr>
                  <tr>
                     <th>Pendidikan</th>
                     <td><?php echo ($data['pendidikan'] === "kosong") ? "<b><i>Belum Memilih Pendidikan.</b></i>" : $data['pendidikan']; ?></td>
                  </tr>
               </table>
               <div class="row mt-4">
                  <div class="col">
                     <div class="m-3 d-grid gap-2"><a href="tugas6.php" class="btn btn-outline-danger d-grid" type="reset">Back To Home</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>