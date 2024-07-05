<?php
include 'D:\xampp5\htdocs\ukk\connection.php';
$id     = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
$data   = mysqli_fetch_array($tampil);
?>


<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="flex-col space-y-4 min-w-screen h-screen animated fadeIn faster fixed left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-cover bg-center bg-fixed" style="background-image: url('/ukk/img/5.jpg');">
    <form method="post" action="">
        <div class="flex flex-col p-8 bg-gray-800 shadow-md hover:shodow-lg rounded-2xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 rounded-2xl p-3 border border-gray-800 text-blue-400 bg-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="flex flex-col ml-3">
                        <div class="font-medium text-white leading-none">Delete Pelanggan <?php echo $data['nama_pelanggan'] ?> ?</div>
                        <input type="hidden" name="id_pelanggan" value="<?php echo $id ?>" required class="form-control">
                        <p class="text-sm text-gray-500 leading-none mt-1">By deleting you will lose your data
                        </p>
                    </div>
                </div>
                <button type="submit" name="hapus" class="flex-no-shrink bg-red-500 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-500 text-white rounded-full">Delete</button>
                <a href="pelanggan.php" class="flex-no-shrink bg-blue-400 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-blue-400 text-white rounded-full">Back</a>
            </div>
        </div>
    </form>
</div>

<?php
if (isset($_POST['hapus'])) {
  $id_pelanggan = $_POST['id_pelanggan'];

  $ubah = mysqli_query($koneksi, 'DELETE FROM pelanggan WHERE id_pelanggan="' . $id_pelanggan . '"');
  if ($ubah) {
    echo '
        <script>
        alert ("Berhasil Menghapus Data Customer");
        window.location="pelanggan.php";
        </script>
          ';
  }
}
?>