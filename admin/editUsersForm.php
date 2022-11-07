<?php
require_once 'classes/User.php';
require_once 'classes/UserTable.php';
require_once 'classes/Connection.php';

if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$gateway = new UserTable($connection);

$statement = $gateway->getUsersById($id);

$row = $statement->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    die("Illegal request");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Edit User</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content">
            <div class="container">
                <h1>Edit User Form</h1><!--form title-->
                <?php 
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="editUsers.php" method="POST" class="form-horizontal">
                    
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" /><!--. cannot be updated from website-->
                    
                    <div class="form-group">
                        <label for="Name" class="col-md-2 control-label">UserName</label><!--label-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>" /><!--input with current data from database-->
                        </div>
                        <div class="col-md-4">
                            <span id="Lusername" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-2 control-label">PassWord</label><!--label-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>" /><!--input with current data from database-->
                        </div>
                        <div class="col-md-4">
                            <span id="LpasswordError" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role" class="col-md-2 control-label">Role</label><!--label-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="role" name="role" value="<?php echo $row['role']; ?>" /><!--input with current data from database-->
                        </div> 
                        <div class="col-md-4">
                            <span id="mroleError" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-default pull-right" name="editUser">Update <span class="glyphicon glyphicon-floppy-disk"></span></button><!--submit button-->
                    <a class="btn btn-default" href="viewUsers.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a><!--return/back button-->
                </form>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
