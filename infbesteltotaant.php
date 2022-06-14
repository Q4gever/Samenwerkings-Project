<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="company.css">
	<title>Producten</title>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>bestellingen totaal</title>

</head>

<body>

<?php

include "nav.html";

// Verbinding maken met de database bieren

require_once("dbconnect.php");

// Geselecteerde gegevens ophalen uit de tabel bier

$query = $db->prepare("SELECT * FROM `purchase` ORDER BY `purchase`.`idpurchase` ASC;
");

$query->execute();

$resultq = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='5' width='1350' cellspacing='5'>";

echo "<thead><th>idpurchase</th><th>purchasedate</th><th>paidamount</th><th>paidinfulldate</th><th>deliverydate</th><th>clientid</th></thead>";

echo "<tbody>";

// Alle gegevens uit kroeg op het scherm tonen

foreach ($resultq as $data) {
    

echo "<td>".$data["idpurchase"]."</td>";
echo "<td>".$data["purchasedate"]."</td>";
echo "<td>".$data["paidamount"]."</td>";
echo "<td>".$data["paidinfulldate"]."</td>";
echo "<td>".$data["deliverydate"]."</td>";
echo "<td>".$data["clientid"]."</td>";




echo "</tr>";

}

echo "</tbody>";

echo "</table>";

?>

</body>

</html>
