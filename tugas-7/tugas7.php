<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>tugas 7 | RUMUS</title>
</head>

<body style="background: #f1f1f1;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 50%">
                    <h4 class="mt-3"><b>Rumus - Rumus</b></h4>
                    <hr>
                    <form action="tugas7proses.php" method="post">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 20%;">Nilai 1</th>
                                <td colspan="2"><input name="n1" type="number" class="form-control" placeholder="Inputkan Angka"></td>
                            </tr>
                            <tr>
                                <th style="width: 20%;">Nilai 2</th>
                                <td colspan="2"><input name="n2" type="number" class="form-control" placeholder="Inputkan Angka"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <div class="form-check">
                                        <input value="Segitiga" name="rumus" class="form-check-input" type="radio" id="rumus">
                                        <label class="form-check-label" for="rumus">Segitiga</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input value="Persegi Panjang" name="rumus" class="form-check-input" type="radio" id="rumus">
                                        <label class="form-check-label" for="rumus">Persegi<br>Panjang</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <div class="d-grid gap-2"><button class="btn btn-primary d-grid" type="submit">Hitung</button></div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2"><button class="btn btn-danger d-grid" type="reset">Batal</button></div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>