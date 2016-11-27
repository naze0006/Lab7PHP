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
    
    public function getAccebility() {
        $sql ="SELECT Accessibility_Code, Description FROM Accessibility";
         $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $access = array();
        foreach ($stmt as $row) {
            $accessibility = new Accessibility($row['Accessibility_Code'], $row['Description']);
            $access[]= $accessibility;
        }
    return $access;
}
}


 
?>