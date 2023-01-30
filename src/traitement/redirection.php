<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<?php
session_start();
if (isset($_POST['ajouter'])){

}
if (isset($_POST['rechercher'])){

}
if (isset($_POST['supprimer'])){
    header("Location: suppressiontraitement.php");
}
if (isset($_POST['deconnexion'])){
session_destroy();
header("Location: ../../index.php");
}
if (isset($_POST['afficher'])){
    header("Location: affichage.php");
}
if (isset($_POST['modifier'])){
    header("Location: a toi de mettre le lien Amaan 😉");
}