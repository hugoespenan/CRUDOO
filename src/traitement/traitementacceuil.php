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
    require_once '../bdd/bdd.php';
    require_once '../bdd/suppression.php';
    $co = new bdd("atm", "localhost", "", "root");
    $requ = new suppression();
    header("Location: suppressionintermediaire.html");

$requ->setCondition($_POST['pos']);
    //$requ->supprimer("id_client");
}
if (isset($_POST['deconnexion'])){
session_destroy();
header("Location: ../../index.php");
}
if (isset($_POST['afficher'])){

}
if (isset($_POST['modifier'])){

}