<?php

include_once 'EntityClass_Lib.php';

class DataAccessObject {

    private $pdo;

    function __construct($iniFile) {
        $dbConnection = parse_ini_file($iniFile);
        extract($dbConnection);
        $this->pdo = new PDO($dsn, $user, $password);
    }

    function __destruct() {
        $this->pdo = null;
    }
}
 
?>