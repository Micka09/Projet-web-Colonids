<?php   


//var_dump($_POST);

$objetPdo = new PDO('mysql:host=localhost;dbname=colonid','root','');

$pdoStat = $objetPdo->prepare('INSERT INTO client VALUES (NULL, :prenom, :adresse, :cp, :ville, :mail, :numero, :mdp)');

$insertIsOk = 0;


/*
echo (empty($_POST['adresse']));
echo (empty($_POST['cp']));
echo (empty($_POST['ville']));
echo (empty($_POST['mail']));
echo (empty($_POST['numero']));
echo (empty($_POST['mdp']));
echo (empty($_POST['prenom']) 
*/



if(!empty($_POST['prenom']) &&
!empty($_POST['adresse']) && !empty($_POST['code']) &&
!empty($_POST['ville']) && !empty($_POST['email']) && !empty($_POST['numerotel']) && !empty($_POST['motdepasse']))


{


 $pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
 $pdoStat->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
 $pdoStat->bindValue(':cp', $_POST['code'], PDO::PARAM_STR);
 $pdoStat->bindValue(':ville', $_POST['ville'], PDO::PARAM_STR);
 $pdoStat->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);
 $pdoStat->bindValue(':numero', $_POST['numerotel'], PDO::PARAM_STR);
 $pdoStat->bindValue(':mdp', password_hash($_POST['motdepasse'], PASSWORD_DEFAULT), PDO::PARAM_STR);

 $insertIsOk = $pdoStat->execute();

}


 if($insertIsOk){

    header('Location: ../Connexion.php');

 }else {

   header('Location: ../inscription.php');

 }
 
 


 

 ?>


