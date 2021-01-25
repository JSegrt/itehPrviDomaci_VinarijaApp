<?php

require "../dbBroker.php";
require "../model/vino.php";

if(isset($_POST['id'])) {
    $myArray = Vino::getById($_POST['id'], $conn);
    echo json_encode($myArray);
}