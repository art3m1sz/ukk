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
                <label for="name" class="block text-sm font-medium text-gray-100">Username</label>
                <input type="text" name="username" id="name" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Password</label>
                <input type="password" name="password" id="name" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Nama Admin</label>
                <input type="text" name="nama_admin" id="nama_admin" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Level</label>
                <select name="id_level" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" id="id_level"">
                    <!-- Add an empty option as the default -->
                    <option value="" selected disabled>Select Level</option>
                    <?php
                    $tampil = mysqli_query($koneksi, "SELECT * FROM level");
                    while ($data = mysqli_fetch_array($tampil)) {
                    ?>
                        <option value="<?php echo $data['id_level'] ?>"><?php echo $data['nama_level'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" value="simpan" name="simpan" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Submit
            </button>
            <button type="button" value="cancel" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" onclick="window.location.href = 'admin.php';">
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
    $nama_admin = $_POST['nama_admin'];
    $id_level = $_POST['id_level'];


  $simpan = mysqli_query($koneksi, 'INSERT INTO admin(username,
    password,
    nama_admin,
    id_level)
      VALUES ("' . $username . '","'
       . $password . '","'
       . $nama_admin . '","'
       . $id_level . '")');
  if ($simpan) {
    echo '
        <script>
        alert("Berhasil Menambah Data Tagihan");
        window.location="admin.php"; //menuju ke halaman tagihan
        </script>
        ';
  }
}
?>
