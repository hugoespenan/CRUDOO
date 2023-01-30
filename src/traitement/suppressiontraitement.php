<?php
header("Location: suppressionintermediaire.php");
require_once '../bdd/bdd.php';
require_once '../bdd/suppression.php';
$co = new bdd("atm", "localhost", "", "root");
$requ = new suppression("id_client", "client", $_POST['pos']);
$r = $co->b->prepare($requ->supprimer());
$r->execute(array('condition' => $_POST['pos']));
