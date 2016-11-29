<?php

class Accessibility {

    private $accessibilityCode;
    private $description;
    private $longDescription;

    public function __construct($accessibilityCode, $description, $longDescription = null) {
        $this->accessibilityCode = $accessibilityCode;
        $this->description = $description;
        $this->longDescription = $longDescription;
    }

    public function getAccessibilityCode() {
        return $this->accessibilityCode;
    }

    public function getDescription() {
        return $this->description;
    }

}

class User {

    private $userId;
    private $name;
    private $phone;
    private $password;
    private $albums;
    private $friends;
    private $friendrequesters;

    public function __construct($userId, $name, $phone) {
        $this->userId = $userId;
        $this->name = $name;
        $this->phone = $phone;

        $this->albums = array();
        $this->friends = array();
        $this->friendrequesters = array();
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getName() {
        return $this->name;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getSharedAlbums() {
        $sharedAlbums = array();
        foreach ($this->albums as $album) {
            if ($album->getAccessibilityCode() == 'shared') {
                $sharedAlbums[$album->getAlbumId()] = $album;
            }
            return $sharedAlbums;
        }
    }

    public function getAlbums() {
        return $this->albums;
    }

    public function setAlbums($albums) {
        $this->albums = $albums;
    }

    public function getAlbumById($albumId) {
        
    }

    public function addFriend($friend) {
        $this->friends[$frind->getUserId()] = $friend;
    }

    public function defriend($friend) {
        
    }

    public function isFriend($userId) {
        
    }

    public function getFriends() {
        return $this->friends;
    }

    public function setFriends($friends) {
        $this->friends = $friends;
    }

    public function getFriendrequesters() {
        return $this->friendrequesters;
    }

    public function setFriendrequesters($friendrequesters) {
        $this->friendrequesters = $friendrequesters;
    }

    public function isRequestedBy($userId) {
        
    }

}

class Album {

    private $albumId;
    private $title;
    private $description;
    private $date_updated;
    private $owner_id;
    private $accessibility_code;
    private $pictures;

    public function __construct($title, $description, $date_updated, $owner_id, $accessibility_code) {
        $this->title = $title;
        $this->description = $description;
        $this->date_updated = $date_updated;
        $this->owner_id = $owner_id;
        $this->accessibility_code = $accessibility_code;
        $this->pictures = array();
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAlbumId() {
        return $this->albumId;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPictures() {
        return $this->pictures;
    }

    function setPictures($pictures) {
        $this->pictures = $pictures;
    }

    public function getDate_updated() {
        return $this->date_updated;
    }

    public function getOwner_id() {
        return $this->owner_id;
    }

    public function getAccessibility_code() {
        return $this->accessibility_code;
    }

    public function setAccessibility_code($accessibility_code) {
        $this->accessibility_code = $accessibility_code;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function addPicture($picture) {
        
    }

    public function deletePicture($picture) {
        
    }

    public function __toString() {
        
    }

}

class Picture {

    private $pictureId;
    private $title;
    private $description;
    private $dateUploaded;
    private $fileName;
    private $comments;

    public function __construct($title, $description, $fileName, $pictureId = null) {
        $this->pictureId = $pictureId;
        $this->title = $title;
        $this->description = $description;
        $this->fileName = $fileName;

        $this->comments = array();
    }

    function getPictureId() {
        return $this->pictureId;
    }

    function setPictureId($pictureId) {
        $this->pictureId = $pictureId;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    function getDateUploaded() {
        return $this->dateUploaded;
    }

    function getFileName() {
        return $this->fileName;
    }

    function getComments() {
        return $this->comments;
    }

    function setComments($comments) {
        $this->comments = $comments;
    }

    public function addComment($comment) {
        
    }

}

Class Comment {

    private $commentId;
    private $commentText;
    private $commentAuthor;
    private $commentDate;

    public function __construct($commentId, $commentText, $commentAuthor, $commentDate) {
        $this->commentId = $commentId;
        $this->commentText = $commentText;
        $this->commentAuthor = $commentAuthor;
        $this->commentDate = $commentDate;
    }
    
    public function getCommentId() {
        return $this->commentId;
    }

    public function setCommentId($commentId) {
        $this->commentId = $commentId;
    }
    
    public function getCommentText() {
        return $this->commentText;
    }

    public function getCommentAuthor() {
        return $this->commentAuthor;
    }

    public function getCommentDate() {
        return $this->commentDate;
    }
    
    public function CompareCommentByDate($commnet1, $comment2){}





}

?>