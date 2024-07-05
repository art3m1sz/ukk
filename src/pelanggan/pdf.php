<?php
// Include the database connection file
include 'D:\xampp5\htdocs\ukk\connection.php';

// Include the FPDF library
require('fpdf186/fpdf.php');

ob_end_clean();

// Create a new FPDF instance
$pdf = new FPDF();
$pdf->AddPage();

// Add background image
$pdf->Image('5.jpg', 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());

// Set font color to white
$pdf->SetTextColor(255, 255, 255);

// Set font for the title
$pdf->SetFont('Arial', 'B', 18);

// Add a title
$pdf->Cell(0, 10, 'Paid Invoices', 0, 1, 'C');
$pdf->Ln(10); // Add some space after the title

// Set font for the data
$pdf->SetFont('Arial', '', 14);

// Retrieve id_penggunaan from the query parameter
$id_tagihan = $_GET['id'];

// Perform the SQL query to retrieve tagihan based on id_tagihan
$sql_tagihan = mysqli_query($koneksi, "SELECT * FROM tagihan WHERE id_tagihan = $id_tagihan");

// Check for query execution errors
if ($sql_tagihan === false) {
    echo "Error in query: " . mysqli_error($koneksi);
    // You might want to handle this error more gracefully
}

// Iterate through the data and add to the PDF
while ($data_tagihan = mysqli_fetch_array($sql_tagihan)) {
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

    // Add data to the PDF
    $pdf->SetTextColor(255, 255, 255);

    $pdf->Cell(40, 10, 'ID Tagihan:', 0, 0, 'L');
    $pdf->Cell(10, 10, '', 0, 0); // Add space between columns
    $pdf->Cell(40, 10, $data_tagihan["id_tagihan"], 0, 1, 'L');

    $pdf->Cell(40, 10, 'ID Penggunaan:', 0, 0, 'L');
    $pdf->Cell(10, 10, '', 0, 0); // Add space between columns
    $pdf->Cell(40, 10, $data_tagihan["id_penggunaan"], 0, 1, 'L');

    $pdf->Cell(40, 10, 'Bulan:', 0, 0, 'L');
    $pdf->Cell(10, 10, '', 0, 0); // Add space between columns
    $pdf->Cell(40, 10, $data_tagihan["bulan"] . ' ' . $data_tagihan["tahun"], 0, 1, 'L');

    $pdf->Cell(40, 10, 'Jumlah Meter:', 0, 0, 'L');
    $pdf->Cell(10, 10, '', 0, 0); // Add space between columns
    $pdf->Cell(40, 10, $data_tagihan["jumlah_meter"], 0, 1, 'L');

    $pdf->Cell(40, 10, 'Total Tagihan:', 0, 0, 'L');
    $pdf->Cell(10, 10, '', 0, 0); // Add space between columns
    $pdf->Cell(40, 10, '$' . $total_bayar, 0, 1, 'L');

    $pdf->Cell(40, 10, 'Status:', 0, 0, 'L');
    $pdf->Cell(10, 10, '', 0, 0); // Add space between columns
    $pdf->Cell(40, 10, $data_tagihan["status"], 0, 1, 'L');

    $pdf->Ln(15); // Add some extra space after each invoice
}

// Output the PDF
$pdf->Output();
?>
