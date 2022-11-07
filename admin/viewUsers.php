<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/UserTable.php';
require_once 'classes/Connection.php';

$connection = Connection::getInstance();
$gateway = new UserTable($connection);

$statement = $gateway->getUserss();

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
}

$user = $_SESSION['user'];
// echo $user->id;
// var_dump($user);
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
        <div class = "content ">
            <div class = "container">
                <?php 
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
                <table style="margin-right: 100px" class ="table table-hover " >
                    <thead>
                        <tr>
                            <!--table label-->
                            <!--this will only show the detail of a location with specific ID chosen by the user-->
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Password</th>                    
                            <th>Role</th>
                            <th></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <!--table contents-->
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['username'] . '</td>';
                            echo '<td>' . $row['password'] . '</td>';                    
                            echo '<td>' . $row['role'] . '</td>';
                          
                            echo '<td style = "width: 250px">'
                            .'<div class="col-md-12">'.
                             '<a  class ="btn btn-info" href="viewUser.php?id='.$row['id'].'">View</a> '
                            . '<a  class ="btn btn-warning" href="editUsersForm.php?id='.$row['id'].'">Edit</a> '
                            . '<a  class="delete btn btn-danger" href="deleteUsers.php?id='.$row['id'].'">Delete</a> '
                            .'</div>'
                            . '</td>';
                            echo '</tr>';  

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-success" href="createUsersForm.php">Create Location</a>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
