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
                    <h3 class="card-title m-2"><b>Form Registrasi</b></h3>
                    <p class="card-subtitle">Isi Data Dibawah Ini :</p>
                    <hr>
                    <form action="tugas6proses.php" method="post">
                        <div class="m-3 ">
                            <div class="input-group">
                                <span class="input-group-text" style="width: 25%;">Nama</span>
                                <input name="nama" type="text" class="form-control">
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text" style="width: 25%;">Alamat</span>
                                <textarea name="alamat" class="form-control"></textarea>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text" style="width: 25%;">Tempat Lahir</span>
                                <input name="tptlahir" type="text" class="form-control">
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text" style="width: 25%;">Tanggal Lahir</span>
                                <input name="tgllahir" type="date" class="form-control" value="">
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text" style="width: 25%;">Jenis Kelamin</span>
                                <table class="form-control">
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input value="laki-laki" name="jenkel" class="form-check-input" type="radio" id="jenkel">
                                                <label class="form-check-label" for="jenkel">Laki - Laki</label>
                                            </div>
                                        </td>
                                        <td>&nbsp; - &nbsp;</td>
                                        <td>
                                            <div class="form-check">
                                                <input value="perempuan" name="jenkel" class="form-check-input" type="radio" id="jenkel">
                                                <label class="form-check-label" for="jenkel">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text" style="width: 25%;">Pendidikan</span>
                                <select name="pendidikan" class="form-select" multiple required>
                                    <option value="kosong" selected>= Pilih Pendidikan =</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="lain-lain">Lain-lain</option>
                                </select>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="d-grid gap-2"><button class="btn btn-primary d-grid" type="submit">Kirim</button></div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid gap-2"><button class="btn btn-danger d-grid" type="reset">Batal</button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>