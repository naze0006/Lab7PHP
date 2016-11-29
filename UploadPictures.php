<html xmlns = "http://www.w3.org/1999/xhtml">
    <head>
        <title>Upload Pictures</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    </head>

    <body>

        <?php
        include "./Lab7Common/Header.php";
        include_once "./Lab7Common/EntityClass_Lib.php";
        include_once "./Lab7Common/DataAccessClass_Lib.php";
        include "./Lab7Common/Function_Lib.php";
        include "./Lab7Common/ImageFunction_Lib.php";
      
        include './Lab7Common/Footer.php';
        
        session_start();
        if(!isset($_SESSION["user"]))
        {
            $_SESSION["rurl"] = "UploadPictures.php";
            header("Location:Login.php");
            exit();
        }
        
        $user = $_SESSION["user"];
        
        extract($_POST);
        
        if(isset($btnUpload))
        {
            $numFiles = sizeof($_FILES['txtUpload']['error']);
            if($numFiles == 0)
            {
                $message = "No upload file specified";
            }
            else
            {
                $userId = $user->getUserId();
                $album = $user->getAlbums()[$selectedAlbumId];
                $selectedAlbumId = $album->getAlbumId();
                for($i = 0; $i< $numFiles; $i++)
                {
                    if($_FILES['txtUpload']['error'][$i] == 0)
                    {
                        $filePath = save_uploaded_file(ORIGINAL_PICTURES_DIR."/$userId/$selectedAlbumId", $i);
                        
                        $imageDetails = getimagesize($filePath);
                        
                        if($imageDetails && in_array($imageDetails, $supportedImageTypes))
                        {
                            $imageFilePath = resamplePicture(ALBUM_PICTURES_DIR."/$userId/$selectedAlbumId", $i);
                        }
                    }
                }
            }
            
        }
        
        ?>
