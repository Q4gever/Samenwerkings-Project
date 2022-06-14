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

$query = $db->prepare("SELECT * FROM product");

$query->execute();

$resultq = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='5' width='1350' cellspacing='5'>";
echo  "<table border='1' width='900' cellspacing='0'>";

echo "<thead><th>stockquantity</th><th>price</th><th>prodname</th><th>proddesc</th><th>brand</th><th>weight</th></thead>";

echo "<tbody>";

// Alle gegevens uit candy op het scherm tonen

foreach ($resultq as $data) {
    


echo "<td>".$data["stockquantity"]."</td>";
echo "<td>".$data["price"]."</td>";
echo "<td>".$data["prodname"]."</td>";
echo "<td>".$data["proddesc"]."</td>";
echo "<td>".$data["brand"]."</td>";
echo "<td>".$data["weight"]."</td>";




echo "</tr>";

}

echo "</tbody>";

echo "</table>";

?>

</body>

</html>
