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

        $query = $db->prepare("SELECT idclient, surname, givenname, zipcode, city, countryid FROM client ORDER BY zipcode");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='1' width='800' cellspacing='0'>";
        echo "<thead><th>IdClient</th><th>Surname</th><th>Givenname</th><th>streetadress</th></thead>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["idclient"]."</td>";
            echo "<td>".$data["surname"]."</td>";
            echo "<td>".$data["givenname"]."</td>";
            echo "<td>".$data["zipcode"]."</td>";
            echo "<td>".$data["city"]."</td>";
            echo "<td>".$data["countryid"]."</td>";


            echo "</tr>";
        }

        
        
            echo "</tbody>";
            echo "</table>";
    
    ?>

    


</body>

</html>

