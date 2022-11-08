<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Tugas 6 | Form input data diri</title>
</head>

<body style="background: #f1f1f1;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 50%">
                    <h3 class="card-title m-2"><b>Masukan Identitas Anda</b></h3>
                    <hr>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="m-3 ">
                            <div class="input-group">
                                <span class="input-group-text" style="width: 25%;">Isikan Nama</span>
                                <input name="nama" type="text" class="form-control" required>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text" style="width: 25%;">Isikan No Telepon</span>
                                <input name="telepon" type="number" class="form-control" required>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text" style="width: 25%;">Isikan Alamat</span>
                                <textarea name="alamat" class="form-control" required></textarea>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="d-grid gap-2"><button class="btn btn-primary d-grid" type="submit">Tampil</button></div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid gap-2"><a class="btn btn-danger d-grid" href="formdatadiri.php">Batal</a></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <?php
                    if (isset($_POST["nama"]) && isset($_POST["telepon"]) && isset($_POST["alamat"])) {
                        $data = [
                            'nama'      => $_POST["nama"],
                            'telepon'   => $_POST["telepon"],
                            'alamat'    => $_POST["alamat"]
                        ];
                        echo "
                        <table class='table'>
                            <tr>
                                <th style='width: 20%;'>Nama :</th>
                                <td>".$data['nama']."</td>
                            </tr>
                            <tr>
                                <th>No Telepon :</th>
                                <td>".$data['telepon']."</td>
                            </tr>
                            <tr>
                                <th>Alamat :</th>
                                <td>".$data['alamat']."</td>
                            </tr>
                        </table>
                        ";
                    } else {
                        echo "<h5 class='pd-5 text-danger'><b>Silahkan Isi Data Terlebih Dahulu!</b></h5><hr>";
                    }
                    ?>
                </div>
            </div>
            
        </div>
    </div>
</body>

</html>