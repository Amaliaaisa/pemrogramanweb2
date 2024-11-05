<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratikum 4</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="">
        <?php
        require_once "OrangBiasa.php";
        require_once "OrangInggris.php";
        require_once "Mahasiswa.php";
        

        $james = new OrangBiasa();
        $james->setNama ('Amalia Aisaturadia');
        $james->ucapSalam();

        echo "<br>";
           
        $rano = new OrangInggris();
        $rano->setNama('Amell');
        $rano->ucapSalam();

        echo "<br>";

        $mahasiswa = new Mahasiswa();
        $mahasiswa->setNama('Emely Walker');
        $mahasiswa->setNim('701230059');

        $nilaimahasiswa = new Nilai();
        $nilaimahasiswa->setTugas(70);
        $nilaimahasiswa->setUts(67);
        $nilaimahasiswa->setUas(90);

        $mahasiswa->setNilai($nilaimahasiswa);

        $mahasiswa->ucapSalam();
        $mahasiswa->tampilkanData();
        ?>
    </div>
</body>
</html>