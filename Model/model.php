<?php
require_once (__DIR__ . '/../config/config.php');

function getBDDConnexion()
{
    try {
        return new PDO(
            sprintf('mysql:host=%s;dbname=%s', DATABASE_CONFIG['host'], DATABASE_CONFIG['database']),
            DATABASE_CONFIG['user'],
            DATABASE_CONFIG['password']
        );
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function inscription($username,$password)
{
    $db = getBDDConnexion();
    $query = $db->prepare("INSERT INTO `users`(`username`, `password`) VALUES ('".$username."','".$password."')");
    $query->execute();

    return 1;
}


function connexion($username,$password)
{
    $db = getBDDConnexion();
    $query = $db->prepare("SELECT username, password FROM users WHERE username=? AND password=?");
    $query->execute(array($username, $password));
    $result = $query->fetch();

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;


    return $result['username'] == $username && $result['password'] == $password;

}

?>
