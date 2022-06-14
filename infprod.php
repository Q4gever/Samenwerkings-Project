<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="company.css">
	<title>Producten</title>
</head>

<body>
	<?php
	 include "nav.html";
    //leg verbinding met de database
        require_once("dbconnect.php");

        $query = $db->prepare("SELECT * FROM `product`");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='5' width='1350' cellspacing='5'>";
        echo "<thead><th>idproduct</th><th>typeid</th><th>stockquantity</th><th>price</th><th>imageref</th>
		<th>prodname</th><th>proddesk</th><th>countryid</th><th>brand</th><th>weight</th>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["idproduct"]."</td>";
			echo "<td>".$data["typeid"]."</td>";
			echo "<td>".$data["stockquantity"]."</td>";
            ?>
            <td><img src="<?php echo $data['imageref']?>" class="cover" width="150"></td>

            <?php
			echo "<td>".$data["price"]."</td>";
			echo "<td>".$data["prodname"]."</td>";
			echo "<td>".$data["proddesc"]."</td>";
			echo "<td>".$data["countryid"]."</td>";
			echo "<td>".$data["brand"]."</td>";
			echo "<td>".$data["weight"]."</td>";
            echo "</tr>";
        

        }

        echo "</tbody>";
        echo "</table>";
    ?>

	<?php


?>

</body>

</html>
