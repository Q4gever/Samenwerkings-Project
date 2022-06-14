<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="company.css">
	<title>Producten</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info bestellingen</title>
</head>
    <?php

include "nav.html";

    //leg verbinding met de database
        require_once("dbconnect.php");

        $query = $db->prepare("SELECT * FROM purchase where SUBSTR(purchasedate,1,7) = SUBSTR(ADDDATE(CURDATE(), INTERVAL -1 MONTH),1,7);
         ");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='5' width='1350' cellspacing='5'>";
        echo "<thead><th>Purchase-ID</th><th>purchasedate</th><th>paidamount</th><th>paidinfulldate</th><th>devliverydate</th><th>Client-ID</th></thead>";
        echo "<tbody>";


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

    <?php
    

?>

</body>

</html>
