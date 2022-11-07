<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/DB.php';
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
var_dump($row);
if (!$row) {
    die("Illegal request");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>  
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                <?php 
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
                <table class = "table table-hover">
                    <thead><!--table labels-->
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Password</th>                    
                            <th>Role</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody><!--table contents, pulled from database-->
                        <?php
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['username'] . '</td>';
                        echo '<td>' . $row['password'] . '</td>';                    
                        echo '<td>' . $row['role'] . '</td>';
                        
                        echo '<td>'
                        . '<a class="delete btn btn-danger" href="deleteUser.php?id='.$row['id'].'">Delete</a> '
                        . '</td>';
                        echo '</tr>';  
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-danger" href="viewUsers.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
