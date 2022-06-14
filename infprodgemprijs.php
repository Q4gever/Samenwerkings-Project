<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="company.css">
    <title>Gemiddelde prijs</title>
</head>
<body>
    <?php
    include "nav.html";
// Verbinding maken met de database

require_once("dbconnect.php");

// Geselecteerde gegevens ophalen uit de tabel 

$query = $db->prepare("SELECT AVG(price) FROM product");
$query->execute();
$resultq = $query->fetchAll(PDO::FETCH_ASSOC);
echo "<table border='5' width='1350' cellspacing='5'>";
echo "<thead> <th>Gemiddelde prijs:</th></thead>";
echo "<tbody>";

// Alle gegevens uit tabel op scherm laten komen

foreach ($resultq as $data) {
echo "<tr>";
echo "<td>".$data["AVG(price)"]."</td>";
echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>
</body>
</html>
