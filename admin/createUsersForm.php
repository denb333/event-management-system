<?php
require_once 'functions.php';
require_once 'classes/User.php';
require_once 'classes/UserTable.php';
require_once 'classes/Connection.php';

$connection = Connection::getInstance();
$gateway = new UserTable($connection);

$users = $gateway->getUsers();

if (!isset($formdata)) {
    $formdata = array();
}

if (!isset($errors)) {
    $errors = array();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Create User Form</title> 
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content">
            <div class = "container">
                <h1>Create User Form</h1><!--form title-->
                <?php 
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="createUsers.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="username" class="col-md-2 control-label">User Name</label><!--event title-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echoValue($formdata, "username")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="usernameError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'username');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-2 control-label">Password</label><!--event description-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="password" name="password" value="<?php echoValue($formdata, "password")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="passwordError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Description');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role" class="col-md-2 control-label">Role</label><!--start date-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="role" name="role" value="<?php echoValue($formdata, "role")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="roleError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'role');?>
                            </span>
                        </div>
                    </div>
   
                
                    
                    </div>
                    <button  type="submit" class = "btn btn-success pull-right">Create User <span class="glyphicon glyphicon-send"></span></button>
                    <a class="btn btn-danger navbar-btn" href = "viewUsers.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a><!--register button-->
                </form>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
