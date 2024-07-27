<?php 
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

		// koneksi database
        include('../koneksi.php');
		$bulan = htmlspecialchars($_POST['bulan']);

		if (empty($bulan) || !is_numeric($bulan)) {
			echo "<script>alert('Bulan tidak valid'); window.history.back();</script>";
			exit();
		}

		// Query untuk memeriksa data berdasarkan tahun
		$cek_data = mysqli_query($koneksi, "SELECT * FROM `tb_permintaan_obat` 
											WHERE MONTH(STR_TO_DATE(`tgl_permintaan_obat`, '%d-%m-%Y')) = $bulan;");

		// Periksa jumlah baris hasil query
		if (mysqli_num_rows($cek_data) == 0) {
			echo "<script>alert('Data Laporan Kosong'); window.history.back();</script>";
			exit();
		} 

?>

	<title>Export Data Ke Excel</title>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		/* border: 1px solid #3c3c3c; */
		padding: 3px 8px;
	}
	.back {
		text-decoration: none;
		color: white;
		background: red;
		border-radius: 10px;
		padding: 8px 10px;
		margin: 10px;
	}
	.export {
		text-decoration: none;
		color: white;
		background: blue;
		border-radius: 10px;
		padding: 8px 10px;
	}
	</style>
	    <h2 style="text-align: center;">Laporan Permintaan Obat</h2>
		<table id="tabel_js" border="1" class="table table-primary" >
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>                                                                                              
				<th>Nama Obat</th>                                            
				<th>Jumlah Permintaan</th>
				<th>Tanggal Permintaan</th>                                             
				<th>Keterangan Apotek</th>
				<th>Keterangan Farmasi</th>
				<th>Status</th>
			</tr>
		</thead>
    
		<tbody>
			<?php 
			include '../koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM `tb_permintaan_obat`
											JOIN tb_obat ON tb_permintaan_obat.id_obat = tb_obat.id_obat
                                			JOIN tb_user ON tb_user.id_user = tb_permintaan_obat.id_user
											WHERE MONTH(STR_TO_DATE(`tgl_permintaan_obat`, '%d-%m-%Y')) = $bulan");
			while ($d = mysqli_fetch_array($data)) {
			?>
			<tr>
                <td align="center"><?= $no++ ?></td>
                <td align="center"><?= $d['username'] ?></td>
                <td align="center"><?= $d['nama_obat'] ?></td>                                              
                <td align="center"><?= $d['jumlah_permintaan_obat'] ?></td>
                <td align="center"><?= $d['tgl_permintaan_obat'] ?></td>
                <td align="center"><?= $d['keterangan_apotek'] ?></td>
                <td align="center"><?= $d['keterangan_farmasi'] ?></td>
                <td align="center"><?= $d['status_permintaan_obat'] ?></td>
			</tr>
			<?php 
			}
			?>
    	</tbody>
	</table>

	<table style="border-collapse: collapse;  float: right;">
		<tr>
			<td>Serang, <?php
				setlocale(LC_TIME, 'id_ID.UTF-8'); // Mengatur lokal ke bahasa Indonesia
				echo strftime("%A, %d %B %Y"); // Menampilkan hari, tanggal, bulan, dan tahun dalam bahasa Indonesia
				?>
			</td>
		</tr>
		<tr>
			<td>Kepala Gudang IFRS Kencana</td>
		</tr>
		<tr>
        	<td height="150px">Edy Sulaeman, Amd.Farm</td>
		</tr>
	</table>
	
	<script>
		window.print();
	</script>
</body>