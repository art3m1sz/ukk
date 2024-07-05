<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
			href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
			rel="stylesheet" />
    <script>
        
    </script>

    <title>Log In</title>
</head>

<body class>
    <div class="bg-gray-50 dark:bg-gray-900 bg-gradient-to-tr from-indigo-300 to-purple-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full max-h-screen bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 mt-6">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                        Form Edit Data
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#" method ="post">
                    <div class="form-group">
                        <div>
                            <label for="username" class="block mb-2 text-m font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username" class="bg-transparent border border-spacing-100 border-black text-base text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="username" class="block mb-2 mt-2 text-m font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="text" name="username" id="username" class="bg-transparent border border-spacing-100 border-black text-base text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="username" class="block mb-2 mt-2 text-m font-medium text-gray-900 dark:text-white">Nomor KWH</label>
                            <input type="text" name="username" id="username" class="bg-transparent border border-spacing-100 border-black text-base text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="username" class="block mb-2 mt-2 text-m font-medium text-gray-900 dark:text-white">Nama Pelanggan</label>
                            <input type="text" name="username" id="username" class="bg-transparent border border-spacing-100 border-black text-base text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="username" class="block mb-2 mt-2 text-m font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text" name="username" id="username" class="bg-transparent border border-spacing-100 border-black text-base text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="username" class="block mb-1 mt-2 text-m font-medium text-gray-900 dark:text-white">ID Tarif</label>
                            <input type="text" name="username" id="username" class="bg-transparent border border-spacing-100 border-black text-base text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                    </div>

                        <div class="flex items-center justify-between">
                            <button type="button" class="w-1/2 text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" onclick="window.location.href = 'index.php';">
                                Cancel
                            </button>
                            <button type="submit" value="login" class="ml-2 w-1/2 text-white bg-gradient-to-r from-black to-indigo-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html> -->


<?php
include 'D:\xampp5\htdocs\ukk\connection.php';
$id = $_GET['id'];
$tampil  = mysqli_query($koneksi, "SELECT * FROM tagihan WHERE id_tagihan='$id'");
$data    = mysqli_fetch_array($tampil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    <title>Form Edit</title>
</head>

<body class="min-h-screen flex items-center justify-center bg-cover bg-center bg-fixed" style="background-image: url('/ukk/img/5.jpg');">
    <div class="max-w-md w-1/2 mb-4 mt-4 mx-auto bg-gray-950 rounded-md p-6 shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-white">Form Edit</h1>
        <form action="#" method="post" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">ID Tagihan</label>
                <input type="text" name="id_tagihan" id="name" value="<?php echo $data['id_tagihan'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" readonly>
            </div>
            <div>
        <label for="name" class="block text-sm font-medium text-gray-100">Penggunaan</label>
        <select name="id_penggunaan" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" id="id_penggunaan" required onchange="updateJumlahMeter()">
        <!-- Add an empty option as the default -->
        <option value="" selected disabled>Select ID Penggunaan</option>
        <?php
        $tampil = mysqli_query($koneksi, "SELECT * FROM penggunaan");
        while ($row = mysqli_fetch_array($tampil)) {
        ?>
            <option value="<?php echo $row['id_penggunaan'] ?>"><?php echo $row['id_penggunaan'] ?></option>
        <?php } ?>
    </select>
    </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Bulan</label>
                <input type="text" name="bulan" id="name" value="<?php echo $data['bulan'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Tahun</label>
                <input type="text" name="tahun" id="name" value="<?php echo $data['tahun'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Jumlah Meter</label>
                <input type="text" name="jumlah_meter" id="jumlah_meter1" value="<?php echo $data['jumlah_meter'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Status</label>
                <input type="text" readonly name="status" id="name" value="<?php echo $data['status'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" required>
            </div>
            <button type="submit" name="ubah" value="Ubah" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
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
                document.getElementById("jumlah_meter1").value = this.responseText;
            }
        };
        xhr.open("GET", "get_jumlah_meter.php?id_penggunaan=" + idPenggunaan, true);
        xhr.send();
    }
    </script>
</body>

</html>


<?php
if (isset($_POST['ubah'])) {
  $id_tagihan = $_POST['id_tagihan'];
  $id_penggunaan = $_POST['id_penggunaan'];
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $jumlah_meter = $_POST['jumlah_meter'];
  $status = $_POST['status'];

  $ubah = mysqli_query($koneksi, 'UPDATE tagihan SET id_penggunaan="' . $id_penggunaan . '",bulan="' . $bulan . '",tahun="' . $tahun . '",jumlah_meter="' . $jumlah_meter . '",status="' . $status .'" WHERE id_tagihan="' . $id_tagihan . '"');
  if ($ubah) {
    echo '
        <script>
          alert("Berhasil Mengubah Data Tagihan");
          window.location="tagihan.php";
        </script>
        ';
  }
}
?>
