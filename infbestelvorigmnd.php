<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="company.css">
	<title>Producten</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bestellingen vorige maand</title>
</head>

<body>
    <?php

include "nav.html";

    //leg verbinding met de database
        require_once("dbconnect.php");

        $query = $db->prepare("SELECT idpurchase, purchasedate, paidamount 
        FROM purchase WHERE purchasedate LIKE '2022-01%'");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='5' width='1350' cellspacing='5'>";
        echo "<thead><th>Purchase-ID</th><th>purchasedate</th><th>Bedrag</th><th>paidinfulldate</th><th>devliverydate</th><th>Client-ID</th></thead>";

        echo "<table border='1' width='800' cellspacing='0'>";
        echo "<thead><th>Aankoop nummer</th><th>Aankoop datum</th><th>Bedrag</th>";
        echo "<tbody>";


        foreach ($resultq as $data) {

            echo "<td>".$data["idpurchase"]."</td>";
            echo "<td>".$data["purchasedate"]."</td>";
            echo "<td>".$data["paidamount"]."</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    ?>

    <?php
    

?>

</body>

</html>
