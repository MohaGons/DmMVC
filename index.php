<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="blog de cigarillos prod">
    <title>Blog Mohammad</title>
</head>

<body>
<?php

require_once('Layout/header.php');
?>
<?php
if( isset($_GET['action']) ){
    if($_GET['action'] == 'createAccount'){
        require_once('Controller/inscriptionController.php');

    }else if($_GET['action']== 'connexion'){
        require_once('Controller/connexionController.php');

    }/*else if($_GET['path']== 'home'){

        require_once('controller/homeController.php');

    }*/
}else{

    echo "error";

}
?>
</body>
</html>