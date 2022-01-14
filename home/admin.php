<?php

$sql = $koneksi->query("SELECT COUNT(id_pend) as pend  from tb_pdd where status='Ada'");
while ($data = $sql->fetch_assoc()) {
	$pend = $data['pend'];
}

$sql = $koneksi->query("SELECT COUNT(id_kk) as kartu  from tb_kk");
while ($data = $sql->fetch_assoc()) {
	$kartu = $data['kartu'];
}

$sql = $koneksi->query("SELECT COUNT(id_pend) as laki  from tb_pdd where jenis_kelamin='Laki-Laki'");
while ($data = $sql->fetch_assoc()) {
	$laki = $data['laki'];
}

$sql = $koneksi->query("SELECT COUNT(id_pend) as prem  from tb_pdd where jenis_kelamin='Perempuan'");
while ($data = $sql->fetch_assoc()) {
	$prem = $data['prem'];
}

$sql = $koneksi->query("SELECT COUNT(id_lahir) as lahir from tb_lahir");
while ($data = $sql->fetch_assoc()) {
	$lahir = $data['lahir'];
}

$sql = $koneksi->query("SELECT COUNT(id_mendu) as mendu  from tb_mendu");
while ($data = $sql->fetch_assoc()) {
	$mendu = $data['mendu'];
}

$sql = $koneksi->query("SELECT COUNT(id_datang) as datang  from tb_datang");
while ($data = $sql->fetch_assoc()) {
	$datang = $data['datang'];
}

$sql = $koneksi->query("SELECT COUNT(id_pindah) as pindah  from tb_pindah");
while ($data = $sql->fetch_assoc()) {
	$pindah = $data['pindah'];
}

?>

<div class="row">
	<div class="col-lg-6 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $pend;  ?>
				</h3>

				<p>Penduduk</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<?php
			if ($_SESSION["ses_level"] != 'Wali Nagari') {
			?>
				<a href="index.php?page=data-pend" class="small-box-footer">Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
			<?php } ?>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $kartu;  ?>
				</h3>

				<p>Kartu Keluarga</p>
			</div>
			<div class="icon">
				<i class="ion ion-card"></i>
			</div>
			<?php
			if ($_SESSION["ses_level"] != 'Wali Nagari') {
			?>
				<a href="index.php?page=data-kartu" class="small-box-footer">Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
			<?php } ?>
		</div>
	</div>
	<!-- ./col -->


</div>

<div class="row">
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<label for="">Jenis Kelamin</label>
				<canvas id="myChart1" width="400" height="400"></canvas>
			</div>
		</div>


	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<label for="">Kelahiran dan Kematian</label>
				<canvas id="myChart2" width="400" height="400"></canvas>
			</div>
		</div>


	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<label for="">Pendatang dan Pindah</label>
				<canvas id="myChart3" width="400" height="400"></canvas>
			</div>
		</div>


	</div>

</div>