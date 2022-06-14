<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="company.css">
	<title>Producten</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gem prijs</title>
</head>

<body>
    <?php

include "nav.html";

    //leg verbinding met de database
        require_once("dbconnect.php");

        $query = $db->prepare("SELECT pricecharged, AVG(pricecharged) FROM purchaseline");
         $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='5' width='1350' cellspacing='5'>";
        echo "<thead><th>pricecharged</th></thead>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<td>".$data["pricecharged"]."</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        

    
    ?>


</body>

</html>
