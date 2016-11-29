<?php

include_once 'EntityClass_Lib.php';
include_once 'Constants.php';

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
        $sql = "SELECT Accessibility_Code, Description FROM Accessibility";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $access = array();
        foreach ($stmt as $row) {
            $accessibility = new Accessibility($row['Accessibility_Code'], $row['Description']);
            $access[] = $accessibility;
        }
        return $access;
    }
    
    public function getAlbumForUser($user){}
    
    public function saveAlbum($title,$description, $accessibility_code, $owner_id){
        
        $sql = "INSERT INTO Album(Title, Description, Accessibility_Code, Owner_Id) Values(:title, :description, :accessibility_code, :owner_id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['title'=>$title, 'description'=>$description, 'accessibility_code'=>$accessibility_code,
            'owner_id'=>$owner_id]);
        
    }
    
    public function updateAlbumAccessibility($album, $newAccessibilityCode){}
    
    public function getUserById($userId){}

    public function saveUser($userId, $name, $phone, $password){
        $sql = "INSERT INTO User VALUES( :userId, :name, :phone, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['userId' => $userId, 'name' => $name, 'phone' => $phone, 'password' => $password]); 
        
    }
    
    public function saveComment($picture,$comment){}
    
    public function getCOmmentsForPicture($picture){}

    public function savePicture($album, $picture){}

    public function deletePicture($picture){}
    
    public function deleteFriend($user, $friendId){}

    public function denyFriendRequest($user,$requestId){}

    public function getFriendsForUser($user){}

    public function getFriendRequestersForUser($user){}

    public function saveFriendRequest($user, $request) {
    
}
    
    
    
     public function userExists($userId) {
        $sql = "SELECT COUNT(UserId) AS num FROM User WHERE UserId = :userId";
        $stmt = $this->pdo->prepare($sql);

        //Bind the provided username to our prepared statement.
        $stmt->bindValue(':userId', $userId);

        //Execute.
        $stmt->execute();

        //Fetch the row.
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row['num'] > 0) {
            die("The User ID already exists!");
        }
    }
    
     public function getUserByIdAndPassword($userId, $password) {
        $user = null;
        $sql = "SELECT UserId, Name, Phone FROM User WHERE UserId = :userId AND Password = :password";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['userId' => $userId, 'password' => $password]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $user = new User($row['UserId'], $row['Name'], $row['Phone']);
            
        }
        return $user;
    }
    
    public function getAllAlbums() {
        $albums = array();
        $sql='SELECT Title, Description, Date_Updated, Accessibility_Code, Owner_Id FROM Album';
        $stmt = $this->pdo->prepare($sql);
         $stmt->execute();
        foreach ($stmt as $row) {
            $album = new Album($row['Title'], $row['Description'], $row['Date_Updated'], $row[Owner_Id], $row['Accessibility_Code']);
            $albums[] = $album;
        }
        return $albums;
    }
}

?>