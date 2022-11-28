<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<title>Tugas 4</title>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<dic class="col">
				<div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 30%">
					<h1 class="mt-3">Belajar Menghitung</h1>
					<h4>Volume kubus</h4>
					<form action="tugas4.php" method="get">
						<div class="m-5">
							<div class="input-group">
								<label class="input-group-text">Sisi Kubus</label>
								<input class="form-control" type="number" name="sisi" required>
							</div>
							<div class="d-grid gap-2 mt-3">
							  <button class="btn btn-primary d-grid" type="submit">Hitung</button>
							  <a class="btn btn-danger d-grid" href="index.php">Reset</a>
							</div>
						</div>
					</form>
					<p><?php if(isset($_GET["sisi"])){
						$sisi = $_GET["sisi"];
						$result = $sisi * $sisi * $sisi;
						echo "<b>Hasil</b>: ".number_format($result);

					} else {
						echo "input <b>Sisi Kubus</b> dulu";
					}
					 ?>
					 </p>
				</div>
			</dic>
		</div>
	</div>
</body>
</html>