<?php

require_once("dbconnect.php");

if(isset($_POST["delete"])){
    $id = $_POST['id'];

$query = $db->prepare("DELETE FROM client WHERE idclient = :idclient");
$query->bindparam("idclient", $id);

if($query->execute()){

    //echo antwoord geven

    echo "Deze klant is verwijderd.";
    
    } else{
        echo "Het verwijderen van deze klant is mislukt.";
    }
        echo "<br>";
}

?>