<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="company.css">
    <title>Omzet</title>
</head>

<body>
    <?php
	 include "nav.html";
    //leg verbinding met de database
        require_once("dbconnect.php");
        $query = $db->prepare("SELECT idproduct, prodname, SUM(pricecharged * quantity) AS turnover FROM product INNER JOIN purchaseline ON idproduct = productid GROUP BY idproduct ORDER BY turnover DESC");

        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "<table border='5' width='1350' cellspacing='5'>";
        echo "<thead> <th>ProductId:</th><th>Product name: </th><th>Totale omzet: </th></thead>";
        echo "<tbody>";
        
        // Alle gegevens uit tabel op scherm laten komen
        
        foreach ($resultq as $data) {
        echo "<tr>";
        echo "<td>".$data["idproduct"]."</td>";
        echo "<td>".$data["prodname"]."</td>";
        echo "<td>".$data["turnover"]."</td>";
        echo "</tr>";
        }
    ?>

    <?php


?>

</body>

</html>
