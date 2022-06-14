<?php

require_once("dbconnect.php");

if(isset($_POST["delete"])){
    $id = $_POST['id'];

$query = $db->prepare("DELETE FROM client WHERE idclient = :idclient");
$query->bindparam("idclient", $id);

// $query->execute();

if($query->execute()){

    //echo antwoord geven

    echo "De klant is verwijderd.";
    
    } else{
        echo "Klant verwijderen is mislukt.";
    }

        echo "<br>";

     

}


?>