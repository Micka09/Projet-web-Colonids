<?php session_start(); 

$objetPdo = new PDO('mysql:host=localhost;dbname=colonid','superadmin','');

$pdoStat = $objetPdo->prepare('SELECT * from client where mail=?'); 

$pdoStat->bindValue(':mail', $_SESSION['email'], PDO::PARAM_STR);

$pdoStat->execute(array($_SESSION['email']));


while ($data = $pdoStat->fetch()) {

        $id=$data['id'];

  
}


$pdoStat = $objetPdo->prepare('INSERT INTO animal VALUES (NULL, :nom, :type, :genre, :race , :id)');

$insertIsOk = 0;







if(!empty($_POST['nom']) &&
!empty($_POST['type']) && !empty($_POST['genre']) &&
!empty($_POST['race']))


{


 $pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
 $pdoStat->bindValue(':type', $_POST['type'], PDO::PARAM_STR);
 $pdoStat->bindValue(':genre', $_POST['genre'], PDO::PARAM_STR);
 $pdoStat->bindValue(':race', $_POST['race'], PDO::PARAM_STR);
    $pdoStat->bindValue(':id', $id, PDO::PARAM_STR);
 
 

 $insertIsOk = $pdoStat->execute();

}


 if($insertIsOk){

    header('Location: ../MonCompte.php');

 }else {

   header('Location: ../ajtAnimal.php');

 }
 


 ?>


