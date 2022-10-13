<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Konstanta</title>
</head>
<body>
    <?php
        define("nilaimax", "100");
        define("pi", "3.14");

        print("Nilai Maksimal : ".nilaimax);

        $jarijari = 5;
        $luaslingkaran = pi*$jarijari*$jarijari;
        echo "<br>Luas Ligkaran = ".$luaslingkaran

    ?>
</body>
</html>