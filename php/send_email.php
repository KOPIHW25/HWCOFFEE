<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pesan = $_POST['pesan'];

    $to = "kopihw25@gmail.com"; // Email tujuan
    $subject = "Pesan Baru dari HW Coffee Website";
    
    $message = "Nama: $nama\n";
    $message .= "Email: $email\n";
    $message .= "Telepon: $telepon\n\n";
    $message .= "Pesan:\n$pesan\n";
    
    $headers = "From: $email" . "\r\n" . 
               "Reply-To: $email" . "\r\n" . 
               "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Pesan gagal dikirim, coba lagi.'); window.history.back();</script>";
    }
}
?>
