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
    <label for="name" class="block text-sm font-medium text-gray-100">Penggunaan</label>
    <select name="id_penggunaan" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" id="id_penggunaan" onchange="updateJumlahMeter()">
        <!-- Add an empty option as the default -->
        <option value="" selected disabled>Select ID Penggunaan</option>
        <?php
        $tampil = mysqli_query($koneksi, "SELECT * FROM penggunaan");
        while ($data = mysqli_fetch_array($tampil)) {
        ?>
            <option value="<?php echo $data['id_penggunaan'] ?>"><?php echo $data['id_penggunaan'] ?></option>
        <?php } ?>
    </select>
</div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Bulan</label>
                <input type="text" name="bulan" id="name" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Tahun</label>
                <input type="text" name="tahun" id="name" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
    <label for="name" class="block text-sm font-medium text-gray-100">Jumlah Meter</label>
    <input type="text" name="jumlah_meter" id="jumlah_meter" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required readonly>
</div>
            <button type="submit" value="simpan" name="simpan" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Submit
            </button>
            <button type="button" value="cancel" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" onclick="window.location.href = 'tagihan.php';">
                Cancel
            </button>
        </form>
    </div>
    <script>
    function updateJumlahMeter() {
        // Ambil nilai id_penggunaan yang dipilih
        var idPenggunaan = document.getElementById("id_penggunaan").value;

        // Lakukan request AJAX untuk mengambil jumlah meter dari server
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Set nilai jumlah meter ke dalam input jumlah_meter
                document.getElementById("jumlah_meter").value = this.responseText;
            }
        };
        xhr.open("GET", "get_jumlah_meter.php?id_penggunaan=" + idPenggunaan, true);
        xhr.send();
    }
    </script>

</body>

</html>
<?php
if (isset($_POST['simpan'])) { //proses simpan data produk
    $id_penggunaan = $_POST['id_penggunaan'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $jumlah_meter = $_POST['jumlah_meter'];
    $status = "Belum Bayar";


  $simpan = mysqli_query($koneksi, 'INSERT INTO tagihan(id_penggunaan,
    bulan,
    tahun,
    jumlah_meter,
    status)
      VALUES ("' . $id_penggunaan . '","'
       . $bulan . '","'
       . $tahun . '","'
       . $jumlah_meter . '","'
       . $status . '")');
  if ($simpan) {
    echo '
        <script>
        alert("Berhasil Menambah Data Tagihan");
        window.location="tagihan.php"; //menuju ke halaman tagihan
        </script>
        ';
  }
}
?>
