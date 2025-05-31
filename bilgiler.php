<?php
$host = "localhost";
$db = "iletisim"; // Veritabanının adı
$user = "root";
$pass = "";

// Veritabanına bağlan
$conn = new mysqli($host, $user, $pass, $db);

// Hata kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Bilgiler tablosundaki tüm verileri çek
$sql = "SELECT * FROM bilgiler";
$result = $conn->query($sql);

$kartlar = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $kartlar[] = $row;
    }
}

$conn->close();

// JSON formatında veri döndür
header('Content-Type: application/json');
echo json_encode($kartlar);
?>
