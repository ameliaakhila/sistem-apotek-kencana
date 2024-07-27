<?php 
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

		// koneksi database
        include('../../koneksi.php');
		// $bulan = htmlspecialchars($_POST['bulan']);
		$tahun = htmlspecialchars($_POST['tahun']);

		if (empty($tahun) || !is_numeric($tahun)) {
			echo "<script>alert('Tahun tidak valid'); window.history.back();</script>";
			exit();
		}

		// Query untuk memeriksa data berdasarkan tahun
		$cek_data = mysqli_query($koneksi, "SELECT * FROM `tb_obat_masuk` 
										    WHERE YEAR(`tgl_obat_masuk`) = $tahun;");

		// Periksa jumlah baris hasil query
		if (mysqli_num_rows($cek_data) == 0) {
			echo "<script>alert('Data Laporan Obat Kosong'); window.history.back();</script>";
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
		border: 1px solid #3c3c3c;
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

<?php 
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporan obat masuk tahunan.xls");
?>
	<table id="tabel_js" class="table table-primary">
        <thead>
			<th>No</th>
            <th>Kode Transaksi</th>
            <th>Tanggal</th>
            <th>Nama Obat</th>
            <th>Jumlah Obat</th>
            <th>Tanggal Kadaluarsa</th>
			<th>Keterangan</th>
		</thead>
		<?php 

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"SELECT * FROM `tb_obat_masuk`,`tb_obat`
										WHERE YEAR(`tgl_obat_masuk`) = $tahun AND tb_obat_masuk.id_obat=tb_obat.id_obat");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td align="center"><?php echo $no++; ?></td>
            <td align="center"><?php echo $d['kode_transaksi'] ?></td>
            <td align="center"><?php echo date('d-m-Y', strtotime($d['tgl_obat_masuk'])); ?></td>         
            <td align="center"><?php echo $d['nama_obat'] ?></td>          
            <td align="center"><?php echo $d['jumlah_obat'] ?></td>
            <td align="center"><?php echo date('d-m-Y', strtotime($d['tgl_kadaluarsa'])) ?></td>
            <td align="center"><?php echo $d['keterangan'] ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>