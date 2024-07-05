<?php
include 'D:\xampp5\htdocs\ukk\connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    <title>Form Insert</title>
</head>

<body class="min-h-screen flex items-center justify-center bg-cover bg-center bg-fixed" style="background-image: url('/ukk/img/5.jpg');">
    <div class="max-w-md w-1/2 mb-4 mt-4 mx-auto bg-gray-950 rounded-md p-6 shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-white">Form Insert</h1>
        <form action="#" method="post" class="space-y-4">
            <div>
            <label for="id_pelanggan" class="text-sm block font-medium text-gray-100">Pelanggan</label>
                            <select name="id_pelanggan" class="mt-1 p-2 w-full border rounded-md ">
                                <option value="" disabled selected>Pilih Pelanggan</option>
                                <?php
                                $tampil = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                                while ($data = mysqli_fetch_array($tampil)) {
                                ?>
                                    <option value="<?php echo $data['id_pelanggan'] ?>"><?php echo $data['nama_pelanggan'] ?></option>
                                <?php } ?>
                            </select>    
            </div>
            <div>
                <label for="bulan" class="block text-sm font-medium text-gray-100">Bulan</label>
                <input type="text" name="bulan" id="bulan" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="tahun" class="block text-sm font-medium text-gray-100">Tahun</label>
                <input type="text" name="tahun" id="tahun" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="meter_awal" class="block text-sm font-medium text-gray-100">Meter Awal</label>
                <input type="text" name="meter_awal" id="meter_awal" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder=" " required>
            </div>
            <div>
                <label for="meter_akhir" class="block text-sm font-medium text-gray-100">Meter Akhir</label>
                <input type="text" name="meter_akhir" id="meter_akhir" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder=" " required>
            </div>
            <button type="submit" value="simpan" name="simpan" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Submit
            </button>
            <button type="button" value="cancel" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" onclick="window.location.href = 'penggunaan.php';">
                Cancel
            </button>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['simpan'])) { //proses simpan data produk
    $id_pelanggan = $_POST['id_pelanggan'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $meter_awal = $_POST['meter_awal'];
    $meter_akhir = $_POST['meter_akhir'];


  $simpan = mysqli_query($koneksi, 'INSERT INTO penggunaan(id_pelanggan,
    bulan,
    tahun,
    meter_awal,
    meter_akhir)
      VALUES ("' . $id_pelanggan . '","'
       . $bulan . '","'
       . $tahun . '","'
       . $meter_awal . '","'
       . $meter_akhir . '")');
  if ($simpan) {
    echo '
        <script>
        alert("Berhasil Menambah Data Penggunaan");
        window.location="penggunaan.php"; //menuju ke halaman customer
        </script>
        ';
  }
}
?>
