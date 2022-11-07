<?php
require_once 'classes/User.php';
require_once 'classes/UserTable.php';
require_once 'classes/Connection.php';

$id = $_POST['id'];
// var_dump($id);
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];


$user = new User($id, $username, $password, $role);

$connection = Connection::getInstance();

$gateway = new UserTable($connection);

$id = $gateway->update($user);

header('Location: viewUsers.php');
