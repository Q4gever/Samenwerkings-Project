<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="company.css">
	<title>Bestellingen</title>
</head>

<body>
	<?php
	 include "nav.html";
    //leg verbinding met de database
        require_once("dbconnect.php");

        $query = $db->prepare("SELECT prodname, purchaseid, quantity FROM product INNER JOIN purchaseline ON idproduct = productid
        GROUP BY idproduct ORDER BY idproduct, purchaseid");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='5' width='1350' cellspacing='5'>";
        echo "<thead><th>purchaseid</th><th>prodname</th><th>quantity</th>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["purchaseid"]."</td>";
            echo "<td>".$data["prodname"]."</td>";
            echo "<td>".$data["quantity"]."</td>";


        }

        echo "</tbody>";
        echo "</table>";
    ?>

	<?php


?>

</body>

</html>
