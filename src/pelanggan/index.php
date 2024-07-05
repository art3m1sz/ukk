<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <title>Document</title>
</head>
<body>
    <div class=" min-h-screen py-12 flex items-center justify-center bg-cover bg-top bg-fixed" style="background-image: url('/ukk/img/5.jpg');">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            include 'D:\xampp5\htdocs\ukk\connection.php';

            // Check if the user is logged in
            session_start();
            if (!isset($_SESSION['username'])) {
                // Redirect to the login page if not logged in
                header("location: login.php");
                exit();
            }

            // Retrieve id_pelanggan from the session (you might need to modify this based on your login logic)
            $username = $_SESSION['username'];
            $stmt_plgn = $koneksi->prepare("SELECT id_pelanggan FROM pelanggan WHERE username = ?");
            $stmt_plgn->bind_param("s", $username);
            $stmt_plgn->execute();
            $stmt_plgn->bind_result($id_pelanggan);
            $stmt_plgn->fetch();
            $stmt_plgn->close();

            // Perform the SQL query to retrieve id_penggunaan based on id_pelanggan
            $sql_penggunaan = mysqli_query($koneksi, "SELECT id_penggunaan FROM penggunaan WHERE id_pelanggan = $id_pelanggan");

            // Check for query execution errors
            if ($sql_penggunaan === false) {
                echo "Error in query: " . mysqli_error($koneksi);
                // You might want to handle this error more gracefully
            }

            // Display the results
            while ($data_penggunaan = mysqli_fetch_array($sql_penggunaan)) {
                $id_penggunaan = $data_penggunaan['id_penggunaan'];

                // Perform the SQL query to retrieve tagihan based on id_penggunaan
                $sql_tagihan = mysqli_query($koneksi, "SELECT * FROM tagihan WHERE id_penggunaan = $id_penggunaan");

                // Check for query execution errors
                if ($sql_tagihan === false) {
                    echo "Error in query: " . mysqli_error($koneksi);
                    // You might want to handle this error more gracefully
                }

                // Display the results
                while ($data_tagihan = mysqli_fetch_array($sql_tagihan)) {
                    // Check if $data_tagihan has the expected structure
                    if (isset($data_tagihan["bulan"], $data_tagihan["tahun"])) {
                    }
                        ?>
                    <!-- Pricing Card -->
                    <div class="bg-gray-1000 rounded-lg overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                        <?php
                        // Fetching total_bayar data from pembayaran table
                        $id_tagihan = $data_tagihan['id_tagihan'];
                        $query_pembayaran = mysqli_query($koneksi, "SELECT (t.jumlah_meter * tar.tarifperkwh) + 2500 AS total_bayar
                            FROM tagihan t
                            JOIN penggunaan peng ON t.id_penggunaan = peng.id_penggunaan
                            JOIN pelanggan pl ON peng.id_pelanggan = pl.id_pelanggan
                            JOIN tarif tar ON pl.id_tarif = tar.id_tarif
                            WHERE t.id_tagihan = $id_tagihan");

                        // Check for query execution and data fetching errors
                        if ($query_pembayaran === false) {
                            echo "Error in query: " . mysqli_error($koneksi);
                            $total_bayar = 0; // Set a default value
                        } else {
                            $pembayaran_data = mysqli_fetch_array($query_pembayaran);

                            // Check if $pembayaran_data is not null before accessing its offset
                            if ($pembayaran_data !== null) {
                                $total_bayar = ($pembayaran_data['total_bayar'] !== null) ? $pembayaran_data['total_bayar'] : 0;
                            } else {
                                $total_bayar = 0; // Set a default value
                            }
                        }
                        ?>
                        <?php
                            $status = $data_tagihan["status"];
                            $bgColor = '';

                            if ($status === 'paid') {
                                $bgColor = 'bg-green-300'; // Green for 'paid'
                            } elseif ($status === 'pending') {
                                $bgColor = 'bg-blue-200'; // Blue for 'pending'
                            } elseif ($status === 'Belum Bayar') {
                                $bgColor = 'bg-red-300'; // Red for 'belum bayar'
                            }
                        ?>

                        <div class="p-1 <?= $bgColor ?>"></div>

                        <div class="p-8 max-w-md">

                        <?php
                            $status = $data_tagihan["status"];
                            $textColor = '';

                            if ($status === 'paid') {
                                $textColor = 'text-green-500'; // Green for 'paid'
                            } elseif ($status === 'pending') {
                                $textColor = 'text-blue-500'; // Blue for 'pending'
                            } elseif ($status === 'Belum Bayar') {
                                $textColor = 'text-red-500'; // Red for 'belum bayar'
                            }
                        ?>

                            <h2 class="text-3xl font-bold <?= $textColor ?> mb-4"><?= $data_tagihan["bulan"] . ' ' . $data_tagihan["tahun"] ?></h2>
                            <p class="<?= $textColor ?> mb-6">Jumlah Meter: <?= $data_tagihan["jumlah_meter"] ?></p>
                            <p class="text-2xl font-bold <?= $textColor ?> mb-6">Total Tagihan: $<?= $total_bayar ?></p>
                            <p class="text-4xl font-bold <?= $textColor ?> mb-6"><?= $data_tagihan["status"] ?></p>

                            <!-- Your existing list -->
                            <ul class="text-sm text-gray-600 mb-6">
                                <li class="mb-2 flex items-center text-white">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    ID Tagihan: <?= $data_tagihan["id_tagihan"] ?>
                                </li>
                                <li class="mb-2 flex items-center text-white">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    ID Penggunaan: <?= $data_tagihan["id_penggunaan"] ?>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 flex items-center justify-center">
                        <?php
                            // Check the status before creating the link
                            if ($data_tagihan["status"] === 'paid') {
                                // If the status is 'paid', link to paymentsuccess.html
                                ?>
                                
            <a href='../pelanggan/pdf.php?id=<?= $data_tagihan['id_tagihan'] ?>' class="block w-full bg-green-500 text-white rounded-full px-4 py-2 hover:bg-green-700 focus:outline-none focus:shadow-outline-red active:bg-green-800 text-center">
                Print Invoice
            </a>
                                <?php
                            } elseif ($data_tagihan["status"] === 'pending') {
                                // If the status is 'pending', link to a specific page (replace 'pending.html' with the actual page)
                                ?>
                                <a href='payment.html' class="block w-full bg-blue-500 text-white rounded-full px-4 py-2 hover:bg-blue-700 focus:outline-none focus:shadow-outline-red active:bg-blue-800 text-center">
                                    Pending
                                </a>
                                <?php
                            } elseif ($data_tagihan["status"] === 'Belum Bayar') {
                                // If the status is 'belum bayar', link to bayar.php with the tagihan ID
                                ?>
                                <a href='bayar.php?id=<?= $data_tagihan['id_tagihan'] ?>' class="block w-full bg-red-500 text-white rounded-full px-4 py-2 hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 text-center">
                                    Belum Bayar
                                </a>
                                <?php
                            }
                        ?>

        </div>
                    </div>
                    <?php
                } // Closing brace for the inner while loop
            } // Closing brace for the outer while loop
            ?>
        </div>
    </div>
</body>
</html>
