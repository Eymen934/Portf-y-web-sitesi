<?php
$host = "localhost";
$db = "iletisim";
$user = "root";
$pass = "";

// Bağlantı
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Verileri al
$isim = $_POST['isim'];
$eposta = $_POST['eposta'];
$mesaj = $_POST['mesaj'];

// Kaydet
$sql = "INSERT INTO mesajlar (isim, eposta, mesaj) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $isim, $eposta, $mesaj);
$stmt->execute();

// Geri dön
echo "<script>alert('Mesajın kaydedildi!'); window.location.href='index.html';</script>";

$stmt->close();
$conn->close();
?>
