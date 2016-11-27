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
        include "./Lab7Common/Function_Lib.php";
        ?>

        <div class="container-fluid">
            <div class="row vertical-margin">
                <div class="col-md-12">
                    <h2 class="text-left">Sign Up</h2>
                </div>          
            </div>
            <div class="row vertical-margin">
                <div class="col-md-12">
                    <p>All fields are required</p>
                </div>          
            </div>

            <br/>
            <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="id">Student ID:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="id" name="id" 
                               value="<?php print $stdId ?>"/><span style="color:red"><?php print $studentIdValidateError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="name" name="name" 
                               value="<?php print $stdName ?>"/><span style="color:red"><?php print $nameValidateError ?></span>
                    </div>
                </div>
                <div class="form-group" >
                    <label class="control-label col-sm-2" for="phone">Phone Number: </label>
                    <div class="col-sm-4">
                        <input class="form-control col-sm-4" type="text" id="phone" name="phone" 
                               value="<?php print $phone ?>"/><span style="color:red"><?php print $phoneValidateError ?></span>
                    </div>

                </div>
                <div class="form-group" >
                    <label class="control-label col-sm-2" for="password" >Password: </label>  
                    <div class="col-sm-4">
                        <input class="form-control col-sm-4" type="password" id="password" name="password" value="<?php print $pass ?>"><span style="color:red"><?php print $passValidateError ?></span>  
                    </div> 

                </div>

                <div class="form-group" >
                    <label class="control-label col-sm-2" for="passwordAgain" >Password Again: </label>  
                    <div class="col-sm-4">
                        <input class="form-control col-sm-4" type="password" id="passwordAgain" name="passwordAgain" value="<?php print $passAgain ?>"><span style="color:red"><?php print $passAgainValidateError ?></span>  
                    </div> 

                </div>
                <br/>

                <div class="col-sm-6">
                    <input class="btn btn-primary" type = "submit" name="btnSubmit" value = "Submit" class="button" />
                    <button class="btn btn-primary" type="reset" name="btnClear" value="Reset" class="button">Clear</button>
                </div>
            </form>

        </div>


    </body>
</html>
    <?php
    include './Lab7Common/Footer.php';
    ?>