<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>tugas 7 | HASIUL HITUNG RUMUS</title>
</head>

<body style="background: #f1f1f1;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 50%">
                    <h4 class="mt-3"><b>Hasil Hitung Rumus</b></h4>
                    <hr>
                    
                    <p><b><i>
                        <?php
                        $result = NULL;
                        $data = [
                            "n1"    => $_POST['n1'],
                            "n2"    => $_POST['n2'],
                            "rumus" => $_POST['rumus'],
                        ];
                        if ($data['rumus'] === 'Segitiga') {
                            $result .= 'Nilai a adalah = '.$data["n1"].'<br>
                                        Nilai b adalah = '.$data["n2"].'<br>
                                        Rumus Yang Dipilih adalah = '.$data["rumus"].'<br>
                                        Hasil Perhitungan adalah = '.(1/2*($data['n1']*$data['n2'])).'';
                         } else if ($data['rumus'] === 'Persegi Panjang') {
                            $result .= 'Nilai a adalah = '.$data["n1"].'<br>
                                        Nilai b adalah = '.$data["n2"].'<br>
                                        Rumus Yang Dipilih adalah = '.$data["rumus"].'<br>
                                        Hasil Perhitungan adalah = '.($data['n1']*$data['n2']).'';
                         } else {
                            $result .= 'tidak ada data';
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