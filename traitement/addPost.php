<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 27/11/2018
 * Time: 14:53
 */
$_SESSION["id"] = 1;
$_SESSION["login"] = "gilles";

if(!isset($_SESSION["id"])) {
    // On n est pas connecté, il faut retourner à la pgae de login
    header("Location:index.php?action=login");
}

// Il faut vérifier avant si on est amis ou pas !!!

    $date = date('Y-m-d h:i:s', time());

// Verifions si on est amis avec cette personne
    $sql2 = "INSERT INTO ecrit VALUES(NULL,?,?,?,?,?,?)";

    $query2 = $pdo->prepare($sql2);
    $query2->execute(array($_POST['titrepost'], $_POST['Text1'], $date, "", $_SESSION['id'], $_POST['idAmi']));

header("location:index.php?action=mur&id=".$_POST['idAmi']);

?>