<?php 
session_start();
if ($_SESSION['status'] != "manajemen") {
    header("location:login.php?pesan=belum_login");
    exit;
}

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan obat masuk lengkap.xls");
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
</head>
<body>
    <table id="tabel_js" class="table table-primary">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Tanggal</th>
                <th>Nama Obat</th>
                <th>Jumlah Obat</th>
                <th>Tanggal Kadaluarsa</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // koneksi database
        include('../../koneksi.php');

        // menampilkan data pegawai
        $data = mysqli_query($koneksi,"SELECT * FROM tb_obat_masuk,tb_obat WHERE tb_obat_masuk.id_obat=tb_obat.id_obat");
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
        </tbody>
    </table>
</body>
</html>
