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

        $query = $db->prepare("SELECT city, COUNT(idclient) as qty FROM client GROUP BY city ");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='1' width='800' cellspacing='0'>";
        echo "<thead><th>city</th><th>clients</th></thead>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["city"]."</td>";
            echo "<td>".$data["qty"]."</td>";
            echo "</tr>";
        }

        
            echo "</tbody>";
            echo "</table>";
    
    ?>

    




</body>

</html>
