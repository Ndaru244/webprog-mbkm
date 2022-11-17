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
                    <p><b><i>
                        <?php
                        $angka = 6;
                        $result = "Bentuk terbilang dari angka $angka adalah ";
                        switch ($angka) {
                            case 0: $result .= "NOL"; break;
                            case 1: $result .= "SATU"; break;
                            case 2: $result .= "DUA"; break;
                            case 3: $result .= "TIGA"; break;
                            case 4: $result .= "EMPAT"; break;
                            case 5: $result .= "LIMA"; break;
                            case 6: $result .= "ENAM"; break;
                            case 7: $result .= "TUJUH"; break;
                            case 8: $result .= "DELAPAN"; break;
                            case 9: $result .= "SEMBILAN"; break;
                            default:
                                $result = "Nilai Diluar Jangkauan";
                                break;
                        }
                        echo $result;
                        ?>
                    </i></b></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>