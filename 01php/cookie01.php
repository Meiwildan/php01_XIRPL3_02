<DOCTYPE html>
    <head>
        <title>Belajar PHP</title>
</head>
<body>
<?php
$value = 'achmatim';
$value2 = 'Achmad Solichin';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1> Ini halaman pengesetan cookie</h1>";

echo "<h2>klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>
</body>
</html>