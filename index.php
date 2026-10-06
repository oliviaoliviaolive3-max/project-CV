<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kririm'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $pesan_status = "<div class='alert-success'>Terima Kasih
        <strong>$nama</strong>, Pesan Anda telah berhasil dikirm ke server SMKN 5 Batam!
        </div>";
    }
}
?>

    