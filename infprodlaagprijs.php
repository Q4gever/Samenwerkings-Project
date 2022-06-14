<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="company.css">
    <title>Producten lage prijs</title>
</head>
<body>
    <?php
include "nav.html";
// Verbinding maken met de database

require_once("dbconnect.php");

// Geselecteerde gegevens ophalen uit de tabel 

$query = $db->prepare("SELECT * FROM product WHERE price < 5");
$query->execute();
$resultq = $query->fetchAll(PDO::FETCH_ASSOC);
echo "<table border='5' width='1350' cellspacing='5'>";
echo "<thead> <th>idproduct </th> <th>Producten met lage prijs: </th> <th>ProdName </th>    </thead>";
echo "<tbody>";

// Alle gegevens uit tabel op scherm laten komen

foreach ($resultq as $data) {
echo "<tr>";
echo "<td>".$data["idproduct"]."</td>";
echo "<td>".$data["price"]."</td>";
echo "<td>".$data["prodname"]."</td>";
echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>
</body>
</html>


