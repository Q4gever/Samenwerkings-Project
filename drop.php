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

        $query = $db->prepare("SELECT product.brand, product.prodname, product.proddesc, product.imageref FROM `type` INNER JOIN product ON type.idtype=product.typeid WHERE `idtype` = '1'");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='1' width='800' cellspacing='0'>";
        echo "<thead><th>merk</th><th>product naam</th><th>beschijving</th></thead>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["brand"]."</td>";
            echo "<td>".$data["prodname"]."</td>";
            echo "<td>".$data["proddesc"]."</td>";


         ?>
					<td><img src="<?php echo $data['imageref']?>" class="cover" width="150"></td>					
					<?php
            echo "</tr>";
        }

        
        echo "</tbody>";
        echo "</table>";

     
    ?>

    

</body>

</html>