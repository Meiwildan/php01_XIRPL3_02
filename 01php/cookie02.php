<DOCTYPE html>
    <head>
        <title>Belajar PHP</title>
</head>
<body>
<?php

if(isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ada. Isinya : " .$_COOKIE 
    ['username']."</h1>";

} else {
    echo "<h1>Cookie 'username' TIDAK ada.</h1>";
}
if(isset($_COOKIE['namalengkap'])) {
    echo "<h1>Cookie 'namalengkap' ada. Isinya : " .$_COOKIE 
    ['namalengkap']."</h1>";

} else {
    echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}

echo "<h2>klik <a href='cookie01.php'>di sini</a> untuk penciptaan cookies</h2>";
?>
</body>
</html>