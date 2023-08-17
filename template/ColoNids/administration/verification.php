
<?php 

session_start();


//var_dump($_POST);

$objetPdo = new PDO('mysql:host=localhost;dbname=colonid','admin','');

$pdoStat = $objetPdo->prepare('SELECT * from client where mail=?');



if(!empty($_POST['email']) &&
!empty($_POST['motdepasse']))

{

    header('Location: ../Connexion.php');

}




$_SESSION['email'] = ($_POST['email']);


$pdoStat->execute(array($_SESSION['email']));

while($data = $pdoStat->fetch())

{

    $hash = $data['mdp'];

}

if (password_verify($_POST['motdepasse'] , $hash )){

    header('Location: ../index.php');
    $_SESSION['email'] = ($_POST['email']);

} else 

{
    header('Location: ../Connexion.php');
}


?>
