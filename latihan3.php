<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Tipe Data</title>
</head>
<body>
    <?php
        $nim = "12.22.2002";
        $nama = "Azizi Ramadhani";
        $umur = 21;
        $nilai = 92.2;
        $status = TRUE;

        echo "NIM : ".$nim."<br>";
        echo "Nama : $nama<br>";
        print "Umur : ".$umur;
        print "<br>";
        printf("Nilai : %.3f<br>",$nilai);

        if($status)
            echo "Status : Aktif";
        else
            echo "Status : Tidak Aktif";
    ?>
</body>
</html>