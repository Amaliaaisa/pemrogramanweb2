<?php
include "orang.php";
include "bankcustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum2</h1>
    <div class="div">
        <?php
            $nasabah = new BankCustomer();
            $nasabah->setCustomerName('Amalia Aisaturadia');
            $nasabah->setAddress('Timor Leste');
            $nasabah->setEmail('amaliaaisaturadia@gmail.com');
            $nasabah->setCard('Prioritas');
            $nasabah->getAcc('Jane');

            $nasabah->insertCard();
            $nasabah->enterPIN(12345);
    ?>
    </div>
</body>
</html>

<!-- localhost/index.php?nama= Amalia -->