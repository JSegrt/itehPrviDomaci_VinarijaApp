<?php

require "../dbBroker.php";
require "../model/vino.php";

if (isset($_POST['idVina']) && isset($_POST['nazivVina']) && isset($_POST['zemljaVina'])
    && isset($_POST['opisVina']) && isset($_POST['cenaVina'])) {

    $status = Vino::update($_POST['idVina'], $_POST['nazivVina'], $_POST['zemljaVina'], $_POST['opisVina'], $_POST['cenaVina'], $conn);
    if ($status) {
        echo 'Success';
    } else {
        echo $status;
        echo 'Unsuccess';
    }
}