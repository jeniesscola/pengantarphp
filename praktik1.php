<!DOCTYPE html>
<html>
<head>
    <title>Jenifer</title>
</head>
<body>
<?php 
    // ini kode buatan jeni
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';

    echo "<B>Selamat Datang $nama !</B>";
    echo "<HR>\n";
    echo "Hari ini tanggal : " . date("d F Y");
?>
</body>
</html>