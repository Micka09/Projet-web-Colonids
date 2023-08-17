<?php

$idNouvelle = $_GET["id"];

try{
    $db = new PDO('mysql:host=localhost;dbname=colonid','superadmin','H0l*kuY12M14/');

    $req = $db->prepare('SELECT id,exemple FROM infomail WHERE id=:id');
    $req->bindParam(':id', $idNouvelle, PDO::PARAM_INT);
    $req->execute();

    $tableau = $req->fetchALL(PDO::FETCH_ASSOC);
    $json = json_encode($tableau);

    echo $json;

} catch(PDOExecption $e){
    echo 'Erreur ! ';
}
?>