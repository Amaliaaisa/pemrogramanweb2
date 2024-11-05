<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <?php
        include "Visibility.php";

        $Visibility = new Visibility();
        $Visibility->tampilkanData();

        echo "<br>";

        echo "Akses di luar kelas <br>";
        echo "public: " . $Visibility->public . '<br>';
        // echo "private: " . $Visibility->private . '<br>';
        // echo "protected: " . $Visibility->protected . '<br>';
        echo "<br> <br>";
        echo "<h2> Konsep Pewarisan </h2>";

        include "Mahasiswa.php";

        $mahasiswa = new Mahasiswa("Emely Smith");
        $mahasiswa->ucapsalam();

        $mahasiswainggris = new Mahasiswaasing("amalia");
        $mahasiswainggris->ucapsalam();

        

        ?>

</div>
</body>
</html>