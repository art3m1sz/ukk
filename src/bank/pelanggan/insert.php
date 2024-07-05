<?php
include 'D:\xampp4\htdocs\backup\connection.php';
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
                <label for="name" class="block text-sm font-medium text-gray-100">Username</label>
                <input type="text" name="username" id="name" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder=" " required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Password</label>
                <input type="text" name="password" id="name" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder=" " required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">No KWH</label>
                <input type="text" name="nomor_kwh" id="name" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder=" " required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" id="name" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder=" " required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Alamat</label>
                <input type="text" name="alamat" id="name" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder=" " required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">ID Tarif</label>
                <select name="id_tarif" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" id="name">
                <?php
                $tampil = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                while ($data = mysqli_fetch_array($tampil)) {
                ?>
                  <option value="<?php echo $data['id_tarif'] ?>"><?php echo $data['id_tarif'] ?></option>
                <?php } ?>
              </select>    
            </div>
            <button type="submit" value="simpan" name="simpan" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Submit
            </button>
            <button type="button" value="cancel" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" onclick="window.location.href = 'pelanggan.php';">
                Cancel
            </button>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['simpan'])) { //proses simpan data produk
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nomor_kwh = $_POST['nomor_kwh'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $id_tarif = $_POST['id_tarif'];


  $simpan = mysqli_query($koneksi, 'INSERT INTO pelanggan(username,
    password,
    nomor_kwh,
    nama_pelanggan,
    alamat,
    id_tarif)
      VALUES ("' . $username . '","'
       . $password . '","'
       . $nomor_kwh . '","'
       . $nama_pelanggan . '","'
       . $alamat . '","'
       . $id_tarif . '")');
  if ($simpan) {
    echo '
        <script>
        alert("Berhasil Menambah Data Customer");
        window.location="pelanggan.php"; //menuju ke halaman customer
        </script>
        ';
  }
}
?>
