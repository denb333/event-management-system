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

$gateway->deleteUser($id);

header('Location: viewUsers.php');