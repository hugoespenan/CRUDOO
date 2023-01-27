<?php
require_once '../bdd/bdd.php';
require_once '../bdd/connexion.php';
$co = new connexion($_POST['mdp'], $_POST['login'], "utilisateur", "email", "mdp");
$connexion = new bdd("agnhen_projgit", "", "localhost", "root");
if (isset($_POST['co'])){
$req = $connexion->b->prepare($co);
$req->fetchAll();
if
}