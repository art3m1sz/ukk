<?php
include 'D:\xampp5\htdocs\ukk\connection.php';

// Ambil id_penggunaan dari parameter GET
$idPenggunaan = $_GET['id_penggunaan'];

// Query untuk mengambil jumlah meter berdasarkan id_penggunaan
$query = "SELECT meter_akhir - meter_awal AS jumlah_meter FROM penggunaan WHERE id_penggunaan = $idPenggunaan";

$result = mysqli_query($koneksi, $query);

// Ambil nilai jumlah meter dari hasil query
if ($row = mysqli_fetch_assoc($result)) {
    echo $row['jumlah_meter'];
} else {
    echo "0"; // Jika tidak ada data, kembalikan nilai 0 atau nilai default yang sesuai
}

// Tutup koneksi
mysqli_close($koneksi);
?>
