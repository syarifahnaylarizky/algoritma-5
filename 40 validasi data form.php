<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = sanitize_input($_POST["nama"]);
  $email = sanitize_input($_POST["email"]);

  // Fungsi untuk membersihkan input
  function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // Contoh validasi lebih lanjut
  if (!preg_match("/^[a-zA-Z-' ]*$/",$nama)) {
    echo "Hanya huruf dan spasi yang diperbolehkan pada nama.";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Format email tidak valid.";
  }
}
?>
