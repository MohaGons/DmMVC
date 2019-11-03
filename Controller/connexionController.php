<?php
require (__DIR__ . '/../View/connexion.php');
require (__DIR__ . '/../Model/model.php');

if( isset($_GET['action']) ){
    if($_GET['action'] == 'connexion'){
        if(connexion($_POST['username'],$_POST['password'])){
            header('Location:mySpace.php');
        }
    }
}
?>
