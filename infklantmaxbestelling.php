<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>

<body>

<?php
			include "nav.html";
		?>
    <?php
    //leg verbinding met de database
        require_once("dbconnect.php");

        $query = $db->prepare("SELECT givenname, surname, streetadress, idpurchase, purchasedate, paidamount FROM client INNER JOIN purchase ON idclient = clientid ORDER BY givenname");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='1' width='800' cellspacing='0'>";
        echo "<thead><th>Givenname</th><th>Surname</th><th>Streetadress</th><th>IdPurchase</th><th>purchasedate</th><th>paidamount</th></thead>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["givenname"]."</td>";
            echo "<td>".$data["surname"]."</td>";
            echo "<td>".$data["streetadress"]."</td>";
            echo "<td>".$data["idpurchase"]."</td>";
            echo "<td>".$data["purchasedate"]."</td>";
            echo "<td>".$data["paidamount"]."</td>";
            echo "</tr>";
        }

        
        echo "</tbody>";
        echo "</table>";
        

    
    ?>

    


</body>
</html>


</html>
