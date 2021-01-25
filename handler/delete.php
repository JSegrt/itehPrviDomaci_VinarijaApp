<?php
require "../dbBroker.php";
require "../model/vino.php";

if(isset($_POST['id'])) {
    $status = Vino::deleteById($_POST['id'], $conn);
    if ($status) {
        echo 'Success';
    } else {
        echo 'Unsuccess';
    }
}