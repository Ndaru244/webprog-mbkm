<?php
if (isset($_POST['jenkel'])) {
   $jenkel = $_POST['jenkel'];
} else {
   $jenkel = "<b><i>Belum Memilih Jenis Kelamin.</b></i>";
}

$hobi = "";
if (isset($_POST['hobi'])) {

    foreach ($_POST['hobi'] as $hbi){
        $hobi .= $hbi.", ";
    }
} else {
    $hobi = "<b><i>Belum Memilih Hobi.</b></i>";
}
   $data = [
         'nama'      => $_POST['nama'],
         'alamat'    => $_POST['alamat'],
         'jenkel'    => $jenkel,
         'pekerjaan' => $_POST['pekerjaan'],
         'hobi'      => $hobi,
      ];
?>
<!DOCTYPE html>
<html>
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <title>Tugas 6 | Form input</title>
</head>
<body style="background: #f1f1f1;">
   <div class="container">
      <div class="row">
         <div class="col">
            <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 50%">
               <h3 class="card-title m-2"><b>Data Mahasiswa</b></h3>
               <hr>
               <table class="table">
                 <tr>
                    <th style="width: 25%;">Nama</th>
                    <td><?php echo ($data['nama'] === "") ? '<b><i>Belum Menginput Nama.</b></i>': $data['nama']; ?></td>
                 </tr>
                 <tr>
                    <th>Alamat</th>
                    <td><?php echo ($data['alamat'] === "") ? '<b><i>Belum Menginput Alamat.</b></i>': $data['alamat']; ?></td>
                 </tr>
                 <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $data['jenkel']; ?></td>
                 </tr>
                 <tr>
                    <th>Pekerjaan</th>
                    <td><?php echo ($data['pekerjaan'] === "kosong") ? "<b><i>Belum Memilih Pekerjaan.</b></i>" : $data['pekerjaan'] ; ?></td>
                 </tr>
                 <tr>
                    <th>Hobi</th>
                    <td><?php echo $data['hobi']; ?></td>
                 </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</body>
</html>