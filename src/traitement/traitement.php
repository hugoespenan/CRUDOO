<?php
require_once '../bdd/bdd.php';
require_once '../bdd/connexion.php';
$co = new connexion($_POST['mdp'], $_POST['login'], "client", "login", "mdp");
$connexion = new bdd("atm", "localhost", "", "root");
if (isset($_POST['co'])){
$req = $connexion->b->prepare($co->co());
$req->execute(array('email' => $_POST['login'], 'mdp' => $_POST['mdp']));
$res = $req->fetchAll();
if (!empty($res)){
    var_dump($res);
    foreach ($res as $item) {
        $co->enregistrement($item['login'], $item['mdp'], $item['nom'], $item['prenom'], $item['adresse'], $item['date_de_naissance']);
    }
    header("Location: acceuil.php");
}else header("Location: ../../index.php");
}