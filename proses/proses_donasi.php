<?php
session_start();
if (!isset($_SESSION['username_user'])) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Silakan login terlebih dahulu'
    ]);
    exit;
}

require('connect.php');
require('../midtrans_config.php');

$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$jumlah = $_POST['jumlah'] ?? '';
$pesan = $_POST['pesan'] ?? '';

// Fungsi untuk validasi email
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Pastikan semua data yang diperlukan ada
if ($nama && $email && $jumlah) {
    if (!is_valid_email($email)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Format email tidak valid'
        ]);
        exit;
    }
    
    $transaction_details = array(
        'order_id' => 'order-'.rand(),
        'gross_amount' => $jumlah,
    );

    $customer_details = array(
        'first_name' => $nama,
        'email' => $email,
    );

    $transaction_data = array(
        'transaction_details' => $transaction_details,
        'customer_details' => $customer_details,
    );

    try {
        $snapToken = \Midtrans\Snap::getSnapToken($transaction_data);
        echo json_encode([
            'status' => 'success',
            'token' => $snapToken
        ]);
        exit;
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Midtrans error: ' . $e->getMessage()
        ]);
        exit;
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Data tidak lengkap'
    ]);
    exit;
}
?>
