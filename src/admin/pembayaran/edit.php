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
$tampil  = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
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

<body class="bg-cover bg-center bg-fixed" style="background-image: url('/ukk/img/5.jpg');">
    <div class="max-w-md w-1/2 mb-4 mt-4 mx-auto bg-gray-950 rounded-md p-6 shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-white">Form Edit</h1>
        <form action="#" method="post" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">ID Pembayaran</label>
                <input type="text" name="id_pembayaran" id="name" value="<?php echo $data['id_pembayaran'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" readonly>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Tagihan</label>
                <select name="id_tagihan" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" id="id_tagihan" onchange="updateTotalBayar()">
                    <?php
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tagihan");
                    while ($row = mysqli_fetch_array($tampil)) {
                        $selected = ($row['id_tagihan'] == $_GET['selectedTagihan']) ? 'selected' : '';
                        ?>
                        <option value="<?php echo $row['id_tagihan']; ?>" <?php echo $selected; ?>><?php echo $row['id_tagihan']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Tanggal Pembayaran</label>
                <input type="date" name="tanggal_pembayaran" id="name" value="<?php echo $data['tanggal_pembayaran'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Biaya Admin</label>
                <input type="text" name="biaya_admin" id="name" value="<?php echo $data['biaya_admin'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Total Bayar</label>
                <input type="text" name="total_bayar" readonly id="total_bayar1" value="<?php echo $data['total_bayar'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
    <label for="name" class="block text-sm font-medium text-gray-100">Admin</label>
    <select name="id_admin" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" id="id_admin">
        <?php
        $tampil = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin <> 1"); // Exclude id_admin 12
        while ($data = mysqli_fetch_array($tampil)) {
        ?>
            <option value="<?php echo $data['id_admin'] ?>"><?php echo $data['nama_admin'] ?></option>
        <?php } ?>
    </select>
</div>
            <button type="submit" name="ubah" value="Ubah" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Submit
            </button>
            <button type="submit" name="validate" value="validate" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Validate
            </button>
            <button type="button" value="cancel" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" onclick="window.location.href = 'pembayaran.php';">
                Cancel
            </button>
        </form>
    </div>
    <script>
        function updateTotalBayar() {
            // Ambil nilai id_tagihan yang dipilih
            var idTagihan = document.getElementById("id_tagihan").value;

            // Lakukan request AJAX untuk mengambil total bayar dari server
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Set nilai total bayar ke dalam input total_bayar
                    document.getElementById("total_bayar1").value = this.responseText;
                }
            };
            xhr.open("GET", "get_total_bayar.php?id_tagihan=" + idTagihan, true);
            xhr.send();
        }
    </script>
</body>

</html>


<?php
if (isset($_POST['ubah'])) {
  $id_pembayaran = $_POST['id_pembayaran'];
  $id_tagihan = $_POST['id_tagihan'];
  $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
  $biaya_admin = $_POST['biaya_admin'];
  $total_bayar = $_POST['total_bayar'];
  $id_admin = $_POST['id_admin'];

  $ubah = mysqli_query($koneksi, 'UPDATE pembayaran SET id_tagihan="' . $id_tagihan . '",tanggal_pembayaran="' . $tanggal_pembayaran . '",biaya_admin="' . $biaya_admin . '",total_bayar="' . $total_bayar . '",id_admin="' . $id_admin .'" WHERE id_pembayaran="' . $id_pembayaran . '"');
  if ($ubah) {
    echo '
        <script>
          alert("Berhasil Mengubah Data Pembayaran");
          window.location="pembayaran.php";
        </script>
        ';
  }
}
?>

<?php
if (isset($_POST['validate'])) {
    $update_status = "paid";  // Assuming you want to set the status to "paid" when validated
    $id_tagihan = $_POST['id_tagihan'];
    $id_admin = $_POST['id_admin'];

    // Assuming you have a column named 'status' in your 'tagihan' table
    $update_query = mysqli_query($koneksi, 'UPDATE tagihan SET status="' . $update_status . '" WHERE id_tagihan="' . $id_tagihan . '"');

    // Update id_admin in pembayaran table
    $update_admin_query = mysqli_query($koneksi, 'UPDATE pembayaran SET id_admin="' . $id_admin . '" WHERE id_tagihan="' . $id_tagihan . '"');

    if ($update_query && $update_admin_query) {
        echo '
            <script>
              alert("Tagihan Validated Successfully");
              window.location="pembayaran.php";
              // You can redirect or perform other actions after validating
            </script>
        ';
    } else {
        echo '
            <script>
              alert("Failed to Validate Tagihan");
            </script>
        ';
    }
}
?>


<!-- ... (Your existing code) -->


