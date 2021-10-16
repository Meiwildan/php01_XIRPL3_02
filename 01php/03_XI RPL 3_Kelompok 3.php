<DOCTYPE html>
    <head>
        <title>Belajar PHP</title>
</head>
<body>
<?php
$MultiArray = [
    [
        'Nama' => 'Satria',
        'Kelas' => 'RPL 1'
    ],
    [
        'Nama' => 'Arsyi',
        'Kelas' => 'RPL 2'
    ],
    [
        'Nama' => 'Dhika',
        'Kelas' => 'RPL 3'
    ],
    [
        'Nama' => 'Evan',
        'Kelas' => 'RPL 4'
    ],
    [
        'Nama' => 'Fabian',
        'Kelas' => 'RPL 5'
    ],
    [
        'Nama' => 'Irfan',
        'Kelas' => 'RPL 6'
    ],
];

$Hasil = array_slice($MultiArray,0,2);
echo "<pre>";
print_r($Hasil);
echo "</pre>";
?>
</body>
      </html>