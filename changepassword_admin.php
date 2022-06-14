<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Wijzig wachtwoord</title>
	 <link rel="stylesheet" type="text/css" href="company.css">
</head>

<header>
    <h1>Wijzig wachtwoord</h1>
    <?php include "nav-session.php"; ?>
</header>

<body>
    <main>
        <?php
require_once "dbconnect.php";




$errorFree = true;
if(!isset ($_POST["update"])) {
    $errorFree = false;
    echo "<p>";
    echo "Velden zijn incorrect ingevuld.";
    echo "</p>";
    exit();
} 

if($errorFree && $_POST['newpwrd'] !== $_POST['newpwrdconfirm']) {
    $errorFree = false;
    echo "<p>";
    echo "Nieuw wachtwoord is niet gelijk aan elkaar.";
    echo "</p>";
    exit();}

    
if($errorFree) {
    try {
        $query = "SELECT * FROM `client` WHERE idclient = '".$_SESSION['idclient']."'";
        $stmt = $db->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result['idclient'] !== $_SESSION['idclient']) {
                $errorFree = false;
                echo "<p>";
                echo "Error: 404: client id niet gevonden.";
                echo "</p>";
                header('refresh:2; url=homebeheer.php');
                exit();}}}
    catch(PDOException $e) {
        $sMsg = '<p>
        Regelnummer: '.$e->getLine().'<br> />
        Bestand: '.$e->getFile().'<br> />
        Foutmelding: '.$e->getMessage().'
        </p>';
        trigger_error($sMsg);}}
    
if($errorFree && password_verify($_POST['newpwrd'], $result['passwrd'])) {
    $errorFree = false;
    echo "<p>";
    echo "Error: nieuwe wachtwoord mag niet het zelfde oude wachtwoord zijn.";
    echo "</p>";
    exit();}

if($errorFree && password_verify($_POST['oldpwrd'], $result['passwrd'])) {
    try {
        $newPwrd = password_hash($_POST['newpwrd'], PASSWORD_DEFAULT);
        $query = $db->prepare("UPDATE client SET passwrd = '$newPwrd' WHERE idclient = '".$_SESSION['idclient']."'");
        $query->execute();

        echo "<p>";
        echo "Uw wachtwoord is aangepast !!";
        echo "</p>";}

    catch(PDOException $e) {
        $sMsg = '<p>
        Regelnummer: '.$e->getLine().'<br> />
        Bestand: '.$e->getFile().'<br> />
        Foutmelding: '.$e->getMessage().'
        </p>';
        trigger_error($sMsg);}
}
    else 
{
    $errorFree = false;
    echo "<p>";
    echo "Current is wrong.";
    echo "</p>";
    exit();}




   
?>

<?php
   
	header('Refresh: 3; url=homebeheer.php');	
    exit(); 

?>
    </main>
</body>

</html>