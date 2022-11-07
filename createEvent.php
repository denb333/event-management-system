<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';
require_once 'validateEvents.php';
start_session();
$formdata = array();
$errors = array();
$user = $_SESSION['user'];
validateEvents(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $title = $formdata['Title'];
    $description = $formdata['Description'];    
    $sDate = $formdata['StartDate'];
    $eDate = $formdata['EndDate'];
    $cost = $formdata['Cost'];
    $locID = $formdata['LocID'];
    $UserID = $user->getId();

    $event = new Event(-1, $title, $description, $sDate, $eDate, $cost, $locID,$UserID);

    $connection = Connection::getInstance();

    $gateway = new EventTableGateway($connection);

    $id = $gateway->insert($event);

    header('Location: viewEvents.php');
}
else {
    require 'createEventForm.php';
}