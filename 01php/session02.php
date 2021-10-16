<DOCTYPE html>
    <head>
        <title>Belajar PHP</title>
</head>
<body>
<?php
session_start();

echo "Nama Anda adalah".$_SESSION['nama'];
echo "<br/><a href='session01.php'>kembali ke hal pertama</a>"
?>
</body>
</html>