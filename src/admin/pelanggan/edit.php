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
$tampil  = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
$data    = mysqli_fetch_array($tampil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    <title>Form Example</title>
</head>

<body class=" min-h-screen flex items-center justify-center bg-cover bg-center bg-fixed" style="background-image: url('/ukk/img/5.jpg');">
    <div class="max-w-md w-1/2 mb-4 mt-4 mx-auto bg-gray-950 rounded-md p-6 shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-white">Form Edit</h1>
        <form action="#" method="post" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">ID Pelanggan</label>
                <input type="text" name="id_pelanggan" id="name" value="<?php echo $data['id_pelanggan'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" readonly>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Username</label>
                <input type="text" name="username" id="name" value="<?php echo $data['username'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Password</label>
                <input type="text" name="password" id="name" value="<?php echo $data['password'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">No KWH</label>
                <input type="text" name="nomor_kwh" id="name" value="<?php echo $data['nomor_kwh'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Nama</label>
                <input type="text" name="nama_pelanggan" id="name" value="<?php echo $data['nama_pelanggan'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Alamat</label>
                <input type="text" name="alamat" id="name" value="<?php echo $data['alamat'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" required>
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
            <button type="submit" name="ubah" value="Ubah" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
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
if (isset($_POST['ubah'])) {
  $id_pelanggan = $_POST['id_pelanggan'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nomor_kwh = $_POST['nomor_kwh'];
  $nama_pelanggan = $_POST['nama_pelanggan'];
  $alamat = $_POST['alamat'];
  $id_tarif = $_POST['id_tarif'];

  $ubah = mysqli_query($koneksi, 'UPDATE pelanggan SET username="' . $username . '",password="' . $password . '",nomor_kwh="' . $nomor_kwh . '",nama_pelanggan="' . $nama_pelanggan . '",alamat="' . $alamat .'",id_tarif="' . $id_tarif . '" WHERE id_pelanggan="' . $id_pelanggan . '"');
  if ($ubah) {
    echo '
        <script>
          alert("Berhasil Mengubah Data Customer");
          window.location="pelanggan.php";
        </script>
        ';
  }
}
?>
