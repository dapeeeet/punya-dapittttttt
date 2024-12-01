<?php
// Konfigurasi email
$to = "davidpanjaitan555@gmail.com"; // Ganti dengan emailmu
$subject = "jawaban";

// Ambil data dari form
$message = "Jawaban:\n";
foreach ($_POST as $key => $value) {
    $message .= ucfirst($key) . ": " . $value . "\n";
}

// Header email
$headers = "From: no-reply@example.com"; // Ganti dengan email pengirim (dummy)

// Kirim email
if (mail($to, $subject, $message, $headers)) {
    echo "Jawaban berhasil dikirim!";
} else {
    echo "Maaf, jawaban gagal dikirim.";
}
?>
