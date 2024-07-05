<?php
include 'D:\xampp5\htdocs\ukk\connection.php';

// Ambil id_tagihan dari parameter GET
$id_tagihan = $_GET['id_tagihan'];

// Query untuk mengambil total bayar berdasarkan id_tagihan
$query = "SELECT (t.jumlah_meter * tar.tarifperkwh) + 2500 AS total_bayar
          FROM tagihan t
          JOIN penggunaan peng ON t.id_penggunaan = peng.id_penggunaan
          JOIN pelanggan pl ON peng.id_pelanggan = pl.id_pelanggan
          JOIN tarif tar ON pl.id_tarif = tar.id_tarif
          WHERE t.id_tagihan = $id_tagihan";

$result = mysqli_query($koneksi, $query);

// Ambil nilai total bayar dari hasil query
if ($row = mysqli_fetch_assoc($result)) {
    echo $row['total_bayar'];
} else {
    echo "0"; // Jika tidak ada data, kembalikan nilai 0 atau nilai default yang sesuai
}

// Tutup koneksi
mysqli_close($koneksi);
?>
