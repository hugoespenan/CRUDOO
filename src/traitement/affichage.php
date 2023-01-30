<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assets/css/style.css">

</head>
<body>
<?php
require_once '../bdd/afficher.php';
require_once '../bdd/bdd.php';
$bdd = new bdd("atm", "localhost", "", "root");
$requ = $bdd->b->query("SELECT * FROM client");
$res = $requ->fetchAll();
?>
<select name="afficher">
<?php
foreach ($res as $re){
    $afficher = new afficher($re);
    ?>
    <option><?php $afficher->afficher(); ?></option>
<?php
}
?>
</select>
</body>
</html>