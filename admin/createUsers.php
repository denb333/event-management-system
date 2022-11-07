<?php
require_once 'classes/User.php';
require_once 'classes/UserTable.php';
require_once 'classes/Connection.php';
require_once 'validateUsers.php';

$formdata = array();
$errors = array();

validateUsers(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $username = $formdata['username'];
    $password = $formdata['password'];    
    $role = $formdata['role'];
   

    $user = new User(-1, $username, $password, $role);

    $connection = Connection::getInstance();

    $gateway = new UserTable($connection);

    $id = $gateway->insert($user);

    header('Location: viewUsers.php');
}
else {
    require 'createUsersForm.php';
}