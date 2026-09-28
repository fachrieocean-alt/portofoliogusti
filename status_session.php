<?php

session_start();

header('Content-Type: application/json');

if (isset($_SESSION['is_login']) && $_SESSION['is_login'] === true) {

    echo json_encode([
        "login" => true,
        "username" => $_SESSION['username'],
        "role" => $_SESSION['role']
    ]);

} else {

    echo json_encode([
        "login" => false
    ]);

}

?>