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
$tampil  = mysqli_query($koneksi, "SELECT * FROM penggunaan WHERE id_penggunaan='$id'");
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
                <label for="name" class="block text-sm font-medium text-gray-100">ID Penggunaan</label>
                <input type="text" name="id_penggunaan" id="name" value="<?php echo $data['id_penggunaan'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" readonly>
            </div>
            <div>
                <label for="bulan" class="block text-sm font-medium text-gray-100">Bulan</label>
                <input type="text" name="bulan" id="bulan" value="<?php echo $data['bulan'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Bulan" required>
            </div>
            <div>
                <label for="tahun" class="block text-sm font-medium text-gray-100">Tahun</label>
                <input type="text" name="tahun" id="tahun" value="<?php echo $data['tahun'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Tahun" required>
            </div>
            <div>
                <label for="meter_awal" class="block text-sm font-medium text-gray-100">Meter Awal</label>
                <input type="text" name="meter_awal" id="meter_awal" value="<?php echo $data['meter_awal'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Meter Awal" required>
            </div>
            <div>
                <label for="meter_akhir" class="block text-sm font-medium text-gray-100">Meter Akhir</label>
                <input type="text" name="meter_akhir" id="meter_akhir" value="<?php echo $data['meter_akhir'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" required>
            </div>
            <div>
                <label for="id_pelanggan" class="block text-sm font-medium text-gray-100">ID Pelanggan</label>
                <select name="id_pelanggan" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" id="name">
                <?php
                $tampil = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                while ($data = mysqli_fetch_array($tampil)) {
                ?>
                  <option value="<?php echo $data['id_pelanggan'] ?>"><?php echo $data['id_pelanggan'] ?></option>
                <?php } ?>
              </select>    
            </div>
            <button type="submit" name="ubah" value="Ubah" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
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
if (isset($_POST['ubah'])) {
  $id_penggunaan = $_POST['id_penggunaan'];
  $id_pelanggan = $_POST['id_pelanggan'];
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $meter_awal = $_POST['meter_awal'];
  $meter_akhir = $_POST['meter_akhir'];

  $ubah = mysqli_query($koneksi, 'UPDATE penggunaan SET id_pelanggan="' . $id_pelanggan . '",bulan="' . $bulan . '",tahun="' . $tahun . '",meter_awal="' . $meter_awal . '",meter_akhir="' . $meter_akhir .'" WHERE id_penggunaan="' . $id_penggunaan . '"');
  if ($ubah) {
    echo '
        <script>
          alert("Berhasil Mengubah Data Penggunaan");
          window.location="penggunaan.php";
        </script>
        ';
  }
}
?>
