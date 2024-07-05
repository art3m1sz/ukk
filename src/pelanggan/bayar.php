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
// Fetch data from tagihan table
$tampil  = mysqli_query($koneksi, "SELECT * FROM tagihan WHERE id_tagihan='$id'");
$data    = mysqli_fetch_array($tampil);

// Fetch additional data from pembayaran table
$query_pembayaran = "SELECT tanggal_pembayaran, biaya_admin, id_admin FROM pembayaran WHERE id_tagihan = $id";
$result_pembayaran = mysqli_query($koneksi, $query_pembayaran);
$row_pembayaran = mysqli_fetch_assoc($result_pembayaran);

// Fetch total bayar
$query_total_bayar = "SELECT (t.jumlah_meter * tar.tarifperkwh) + 2500 AS total_bayar
                    FROM tagihan t
                    JOIN penggunaan peng ON t.id_penggunaan = peng.id_penggunaan
                    JOIN pelanggan pl ON peng.id_pelanggan = pl.id_pelanggan
                    JOIN tarif tar ON pl.id_tarif = tar.id_tarif
                    WHERE t.id_tagihan = $id";
$result_total_bayar = mysqli_query($koneksi, $query_total_bayar);
$row_total_bayar = mysqli_fetch_assoc($result_total_bayar);
$total_bayar = $row_total_bayar['total_bayar'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    <title>Form Example</title>
</head>

<body class="bg-gradient-to-tr from-indigo-300 to-purple-900 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-1/2 mb-4 mt-4 mx-auto bg-white rounded-md p-6 shadow-md">
        <h1 class="text-2xl font-bold mb-4">Form Example</h1>
        <form action="#" method="post" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">ID Tagihan</label>
                <input type="text" name="id_tagihan" id="name" value="<?php echo $data['id_tagihan'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" readonly>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">ID Penggunaan</label>
                <input type="text" name="id_penggunaan" id="name" value="<?php echo $data['id_tagihan'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" readonly>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Bulan</label>
                <input type="text" name="bulan" id="name" value="<?php echo $data['bulan'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" readonly>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Tahun</label>
                <input type="text" name="tahun" id="name" value="<?php echo $data['tahun'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" readonly>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Jumlah Meter</label>
                <input type="text" name="jumlah_meter" id="jumlah_meter1" value="<?php echo $data['jumlah_meter'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" readonly>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Status</label>
                <input type="text" readonly name="status" id="name" value="<?php echo $data['status'] ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Your name" required>
            </div>
            <!-- Add this input field to display total_bayar -->
            <div>
                <label for="total_bayar" class="block text-sm font-medium text-gray-600">Total Bayar</label>
                <input type="text" readonly name="total_bayar" id="total_bayar" value="<?php echo $total_bayar; ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="Total Bayar" required>
            </div>
            <div>
                <label for="tanggal_pembayaran" class="block text-sm font-medium text-gray-600">Tanggal Pembayaran</label>
                <input type="date" readonly name="tanggal_pembayaran" id="tanggal_pembayaran" value="<?php echo date("Y-m-d"); ?>" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300">
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Biaya Admin</label>
                <input type="text" value="2500" name="biaya_admin" id="biaya_admin" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" readonly>
            </div>  
            <div>
                <label for="id_admin" class="block text-sm font-medium text-gray-600"></label>
                <input type="hidden" name="id_admin" id="id_admin" value="<?php echo $id_admin; ?>">
            </div>
            <button type="submit" name="ubah" value="Ubah" class="w-full text-white bg-gradient-to-r from-black to-indigo-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Bayar
            </button>
            <button type="button" value="cancel" class="w-full text-white bg-gradient-to-r from-black to-indigo-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" onclick="window.location.href = 'index.php';">
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
    // Assuming you have already fetched $id from the URL
    $id_tagihan = $_POST['id_tagihan'];
    $tanggal_pembayaran = date("Y-m-d");
    $biaya_admin = $_POST['biaya_admin'];
    $total_bayar = $_POST['total_bayar'];
    $id_admin = 1;

    // Insert data into the pembayaran table
    $insert_query = "INSERT INTO pembayaran (id_tagihan, tanggal_pembayaran, biaya_admin, total_bayar, id_admin) 
                     VALUES ('$id_tagihan', '$tanggal_pembayaran', '$biaya_admin', '$total_bayar', '$id_admin')";

    $result = mysqli_query($koneksi, $insert_query);

    if ($result) {
        // Update the status in the tagihan table
        $update_status = "pending";
        $update_query = mysqli_query($koneksi, "UPDATE tagihan SET status='$update_status' WHERE id_tagihan='$id_tagihan'");

        if ($update_query) {
            echo '
                <script>
                  alert("Pembayaran Berhasil");
                  window.location="payment.html";
                </script>
            ';
        } else {
            echo '
                <script>
                  alert("Pembayaran Berhasil, tetapi update status gagal");
                </script>
            ';
        }
    } else {
        echo '
            <script>
              alert("Pembayaran Gagal: ' . mysqli_error($koneksi) . '");
            </script>
        ';
    }
}
?>


