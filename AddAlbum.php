<html xmlns = "http://www.w3.org/1999/xhtml">
    <head>
        <title>Course Registration</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    </head>

    <body>

        <?php
        include "./Lab7Common/Header.php";
        include_once "./Lab7Common/EntityClass_Lib.php";
        include_once "./Lab7Common/DataAccessClass_Lib.php";
        include "./Lab7Common/Constants.php";
        include "./Lab7Common/Function_Lib.php";
        
        session_start();
        $dao = new DataAccessObject(INI_FILE_PATH);
        $access = $dao->getAccebility();
        
        
        
        ?>
        <div class="container-fluid">
            <div class="row vertical-margin col-sm-8 text-center">
                <h2>Create New Album</h2>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    <p>Welcome! (not you? Change <a href="Login.php"> user </a>here)</p>
                </div>
            </div>
            <br><br>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label" for="title">Title: </label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="title" name="title" 
                                       value="<?php print $id ?>"/><span style="color:red"><?php print $error ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label" for="accessibility">Accessibility: </label>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" id="accessibility" name="accessibility">
                                    <?php 
                                            foreach ($access as $accessType){
                                                print '<option value=$accessType->getAccessibilityCode()>';
                                                print $accessType->getDescription();
                                                print '</option>';
                                            }
                                    
                                    ?>
                                </select> 
                                    
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label" for="description">Description: </label>
                            </div>
                            <div class="col-sm-4">
                                <textarea type="text" rows="7" class="form-control" id="description" name="description"></textarea>
                                          
                               
                            </div>
                        </div>





                    </form>










                    </div>













                    </div>



                    </body>
                    </html>
                    <?php
                    include './Lab7Common/Footer.php';
                    ?>
