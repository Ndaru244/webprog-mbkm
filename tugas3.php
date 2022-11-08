<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<title>Tugas 3</title>
</head>
<?php 
$data = [
			'nama' 	 => 'Ndaru Langgeng Santosa',
			'alamat' => 'Banten, Kab. Tangerang, Km. Pabuaran, Curug.',
			'ttl'	 => 'Tangerang, 30 Juni 2001',
			'telp'	 => '085693784773'

		];
?>
<body style="background: #f1f1f1;">
	<div class="container">
		<div class="row mt-5">
			<dic class="col">
				<div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 30%">
					<h1 class="mt-3">Data Diri</h1>
					<hr>
						<div class="m-3 ">
							<div class="input-group">
								<span class="input-group-text" style="width: 20%;">Nama</span>
								<input type="text" class="form-control" value="<?php echo $data['nama'] ?>" readonly>
							</div>
							<div class="input-group mt-2">
								<span class="input-group-text" style="width: 20%;">Alamat</span>
								<textarea class="form-control" readonly><?php echo $data['alamat'] ?></textarea>
							</div>
							<div class="input-group mt-2">
								<span class="input-group-text" style="width: 20%;">TTL</span>
								<input type="text" class="form-control" value="<?php echo $data['ttl'] ?>" readonly>
							</div>
							<div class="input-group mt-2">
								<span class="input-group-text" style="width: 20%;">Telp</span>
								<input type="text" class="form-control" value="<?php echo $data['telp'] ?>" readonly>
							</div>
						</div>
					  
					</div>
				</div>
			</dic>
		</div>
	</div>
</body>
</html>