<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="company.css">
	<title>Producten</title>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>info bestellingen</title>

</head>

<body>

<?php


include "nav.html";

// Verbinding maken met de database bieren

require_once("dbconnect.php");

// Geselecteerde gegevens ophalen uit de tabel bier

$query = $db->prepare("SELECT idpurchase, purchasedate, deliverydate  
FROM purchase");

$query->execute();

$resultq = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='5' width='1350' cellspacing='5'>";
echo "<thead><th>Purchase line ID</th><th>productid</th><th>quantity</th><th>pricecharged</th><th>purchaseid</th></thead>";

echo  "<table border='1' width='800' cellspacing='0'>";
echo "<thead><th>Aankoop nummer</th><th>Aankoop datum</th><th>Aflever datum</th>";

echo "<tbody>";

// Alle gegevens uit kroeg op het scherm tonen

foreach ($resultq as $data) {


echo "<td>".$data["idpurchaseline"]."</td>";
echo "<td>".$data["productid"]."</td>";
echo "<td>".$data["quantity"]."</td>";
echo "<td>".$data["pricecharged"]."</td>";
echo "<td>".$data["purchaseid"]."</td>";

echo "<tr bgcolor='lightgray'  >";
echo "<td>".$data["idpurchase"]."</td>";
echo "<td>".$data["purchasedate"]."</td>";
echo "<td>".$data["deliverydate"]."</td>";




echo "</tr>";

}

echo "</tbody>";

echo "</table>";

?>

</body>

</html>
