<?php
require_once '../bdd/bdd.php';
require_once '../bdd/inscrire.php';
$connexion = new bdd("atm", "localhost", "", "root");

if (strlen($_POST['nom'] AND $_POST['prenom']AND $_POST['login'] AND $_POST['mdp'] AND $_POST['adresse'])>0 AND isset($_POST['ddn'])){
    if (isset($_POST['inscrire'])){
    $inscription = new inscrire("nom", "date_de_naissance", "prenom", "adresse", "login", "mdp", "client");
    $req = $connexion->b->prepare($inscription->inscription());
    $req->execute(array('nom' => $_POST['nom'], 'prenom' => $_POST['prenom'], 'login' => $_POST['login'], 'mdp'=>$_POST['mdp'], 'adresse' => $_POST['adresse'], 'ddn' => $_POST['ddn']));
    header("Location: ../../index.php");
    }}
header("Location: inscription.php");
if (isset($_POST['con'])){
    header("Location: ../../index.php");
}