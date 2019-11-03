<?php
require (__DIR__ . '/../View/createAccount.php');
require (__DIR__ . '/../Model/model.php');

if( isset($_GET['action']) ){
    if($_GET['action'] == 'createAccount'){
        if( ($_POST['password1'] == $_POST['password2']) && ($_POST['password1'] != '') && ($_POST['password2'] != '') ){
            if($_POST['username'] != ''){
                if(inscription($_POST['username'],$_POST['password1'])){
                    echo 'Vous êtes bien inscrit !';
                    }
            }
        }
    }
}
?>
