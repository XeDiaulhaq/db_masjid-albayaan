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

$data = json_decode(file_get_contents('php://input'), true);

$nama = $data['nama'] ?? '';
$email = $data['email'] ?? '';
$jumlah = $data['jumlah'] ?? '';
$pesan = $data['pesan'] ?? '';
$result = $data['result'] ?? '';
 
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
 
if ($nama && $email && $jumlah) {
    if (!is_valid_email($email)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Format email tidak valid'
        ]);
        exit;
    }
    
    $query = mysqli_query($conn, "INSERT INTO tb_donasi (nama, email, jumlah, pesan, payment_result) VALUES ('$nama', '$email', '$jumlah', '$pesan', '" . json_encode($result) . "')");
    
    if (!$query) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Data gagal dimasukkan: ' . mysqli_error($conn)
        ]);
    } else {
        echo json_encode([
            'status' => 'success',
            'message' => 'Data berhasil dimasukkan'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Data tidak lengkap'
    ]);
}
?>
