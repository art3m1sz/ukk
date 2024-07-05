<?php
include 'D:\xampp5\htdocs\ukk\connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    <title>Form Example</title>
</head>

<body class="min-h-screen flex items-center justify-center bg-cover bg-center bg-fixed" style="background-image: url('/ukk/img/5.jpg');">
    <div class="max-w-md w-1/2 mb-4 mt-4 mx-auto bg-gray-950 rounded-md p-6 shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-white">Form Insert</h1>
        <form action="#" method="post" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Tagihan</label>
                <select name="id_tagihan" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" id="id_tagihan" onchange="updateTotalBayar()">
                    <?php
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tagihan");
                    while ($data = mysqli_fetch_array($tampil)) {
                    ?>
                        <option value="<?php echo $data['id_tagihan'] ?>"><?php echo $data['id_tagihan'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Tanggal Pembayaran</label>
                <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Biaya Admin</label>
                <input type="text" value="2500" name="biaya_admin" id="biaya_admin" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" readonly>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Total Bayar</label>
                <input type="text" name="total_bayar" id="total_bayar" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" placeholder="" required readonly>
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-100">Admin</label>
                <select name="id_admin" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-indigo-300" id="id_admin">
                    <?php
                    $tampil = mysqli_query($koneksi, "SELECT * FROM admin");
                    while ($data = mysqli_fetch_array($tampil)) {
                    ?>
                        <option value="<?php echo $data['id_admin'] ?>"><?php echo $data['nama_admin'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" value="simpan" name="simpan" class="w-full text-white bg-gradient-to-r from-gray-300 via-gray-500 to-gray-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Submit
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
                    document.getElementById("total_bayar").value = this.responseText;
                }
            };
            xhr.open("GET", "get_total_bayar.php?id_tagihan=" + idTagihan, true);
            xhr.send();
        }
    </script>
</body>

</html>

<?php
if (isset($_POST['simpan'])) { //proses simpan data produk
    $id_tagihan = $_POST['id_tagihan'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $biaya_admin = $_POST['biaya_admin'];
    $total_bayar = $_POST['total_bayar'];
    $id_admin = $_POST['id_admin'];

    $simpan = mysqli_query($koneksi, 'INSERT INTO pembayaran(id_tagihan,
    tanggal_pembayaran,
    biaya_admin,
    total_bayar,
    id_admin)
      VALUES ("' . $id_tagihan . '","'
        . $tanggal_pembayaran . '","'
        . $biaya_admin . '","'
        . $total_bayar . '","'
        . $id_admin . '")');
    if ($simpan) {
        echo '
            <script>
            alert("Berhasil Menambah Data Pembayaran");
            window.location="pembayaran.php"; //menuju ke halaman pembayaran
            </script>
            ';
    }
}
?>
