<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>tugas 7 | IF ELSE Majemuk</title>
</head>

<body style="background: #f1f1f1;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 50%">
                    <h4 class="mt-3"><b>Percabangan IF ELSE Majemuk</b></h4>
                    <hr>
                    <p>E = 0-49, D = 50-59, C = 60-74, B = 75-84, A = 85-100</p>
                    <p><b><i>
                        <?php
                        $nilai= 90;
                        $grade = "Nilai Anda: $nilai Dikonversi Menjadi ";
                        if ($nilai >= 0 && $nilai<50) {
                            $grade .= "E";
                        } else if ($nilai>= 50 && $nilai<60) {
                            $grade .= "D";
                        } else if ($nilai>= 60 && $nilai<75) {
                            $grade .= "C";
                        } else if ($nilai>= 75 && $nilai<85) {
                            $grade .= "B";
                        } else if ($nilai>= 85 && $nilai<100) {
                            $grade .= "A";
                        } else {
                            $grade = "Nilai Diluar Jangkauan";
                        }

                        echo $grade;
                        ?>
                    </i></b></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>