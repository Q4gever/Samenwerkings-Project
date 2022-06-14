<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="company.css">
	<title>Producten</title>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>bestellingen met meer details</title>

</head>

<body>

<?php

include "nav.html";

// Verbinding maken met de database bieren

require_once("dbconnect.php");

// Geselecteerde gegevens ophalen uit de tabel bier

$query = $db->prepare("SELECT idpurchase, COUNT(idpurchaseline) AS NrLines  
FROM purchase
INNER JOIN purchaseline ON idpurchase = purchaseid
GROUP BY idpurchase
ORDER BY NrLines DESC");

$query->execute();

$resultq = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='5' width='1350' cellspacing='5'>";

echo "<thead><th>Aankoop nummer</th><th>Aantal regels</th>";

echo "<tbody>";

// Alle gegevens uit kroeg op het scherm tonen

foreach ($resultq as $data) {
    
echo "<td>".$data["idproduct"]."</td>";
echo "<td>".$data["typeid"]."</td>";
echo "<td>".$data["stockquantity"]."</td>";
echo "<td>".$data["price"]."</td>";
echo "<td>".$data["prodname"]."</td>";
echo "<td>".$data["proddesc"]."</td>";
echo "<td>".$data["brand"]."</td>";
echo "<td>".$data["weight"]."</td>";
echo "<tr bgcolor='lightgray'  >";
echo "<td>".$data["idpurchase"]."</td>";
echo "<td>".$data["NrLines"]."</td>";







echo "</tr>";

}

echo "</tbody>";

echo "</table>";

?>

</body>

</html>
