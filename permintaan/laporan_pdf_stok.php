<?php 
session_start();
if (($_SESSION['status'] != "admin") && ($_SESSION['status'] != "admin"))  {
    header("location:login.php?pesan=belum_login");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Export Data Ke Excel</title>
    <style type="text/css">
        body{
            font-family: sans-serif;
        }
        table{
            margin: 20px auto;
            border-collapse: collapse;
        }
        table th, table td{
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
</head>
<body>
    <h1 style="text-align: center;">Laporan Stok Obat</h1>
    <table id="tabel_js" border="1" class="table table-primary">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Obat</th> 
            <th>Jenis Obat</th>    
            <th>Satuan Obat</th>                                       
            <th>Stok Obat</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from tb_obat,tb_jenis_obat where tb_obat.id_jenis_obat=tb_jenis_obat.id_jenis_obat");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td align="center"><?= $no++ ?></td>
            <td align="center"><?= $d['nama_obat'] ?></td>                                              
            <td align="center"><?= $d['nama_jenis_obat'] ?></td>
            <td align="center"><?= $d['satuan_obat'] ?></td>
            <td align="center"><?= $d['stok_obat'] ?></td>
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
</html>
