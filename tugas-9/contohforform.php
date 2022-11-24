<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>tugas 9 | Perulangan</title>
</head>

<body style="background: #f1f1f1;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 50%">
                    <h4 class="mt-3"><b>Perulangan FOR</b></h4>
                    <hr>
                    <p>Perulangan Pada Form :</p>
                    <p>
                        <b>
                            <i>
                                <form method="post" name="form1">
                                    <div class="m-3">
                                    <div class="input-group">
                                        <span class="input-group-text" style="width: 25%;">Tanggal</span>
                                        <select name="tanggal" class="form-select">
                                            <?php
                                            for ($tanggal = 1; $tanggal <= 31; $tanggal++) {
                                            ?>
                                                <option value="<?php echo $tanggal; ?>"><?php echo $tanggal; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                </form>
                            </i>
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>