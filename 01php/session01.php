<DOCTYPE html>
    <head>
        <title>Belajar PHP</title>
</head>
<body>
<?php
session_start();

$_SESSION['nama'] = "Achmad Solichin";
echo "<a href='session02.php'>Menuju ke halaman kedua</a>";
?>
</body>
</html>