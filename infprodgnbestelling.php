<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="company.css">
	<title>Geen Bestellingen</title>
</head>

<body>
	<?php
	 include "nav.html";
    //leg verbinding met de database
        require_once("dbconnect.php");

        $query = $db->prepare ("SELECT * FROM product WHERE idproduct NOT IN (SELECT DISTINCT productid FROM purchaseline)");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='5' width='1350' cellspacing='5'>";
        echo "<thead><th>idtype</th><th>name</th>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["idtype"]."</td>";
			echo "<td>".$data["idproduct"]."</td>";
        }

        echo "</tbody>";
        echo "</table>";
    ?>

	<?php


?>

</body>

</html>
