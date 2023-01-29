<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<?php
session_start();
?>
<form action="traitementacceuil.php" method="post">
<input type="submit" value="ajouter" name="ajouter">
<input type="submit" value="afficher" name="afficher">
<input type="submit" value="rechercher"name="rechercher">
<input type="submit" value="modifier mon compte" name="modifier">
<input type="submit" value="supprimer" name="supprimer">
<input type="submit" value="Déconnexion" name="deconnexion">
</form>
