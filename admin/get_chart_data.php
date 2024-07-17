<?php
include('../koneksi.php');

// Mulai output buffering
ob_start();

// Ambil data jumlah permintaan obat per bulan
$sql = "SELECT MONTH(STR_TO_DATE(tgl_permintaan_obat, '%d-%m-%Y')) as bulan, COUNT(*) as jumlah
        FROM tb_permintaan_obat
        WHERE tgl_permintaan_obat IS NOT NULL
        GROUP BY bulan
        HAVING bulan BETWEEN 1 AND 12";
$result = $koneksi->query($sql);

$data = array_fill(0, 12, 0);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $bulan = (int)$row['bulan'];
        if ($bulan >= 1 && $bulan <= 12) {
            $data[$bulan - 1] = (int)$row['jumlah'];
        }
    }
}

// Tutup koneksi
$koneksi->close();

// Bersihkan output buffer sebelum mengirim header JSON
ob_clean();
header('Content-Type: application/json');
echo json_encode($data);

// Akhiri output buffering dan kirim buffer output
ob_end_flush();
?>
