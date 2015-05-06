<?php

require_once __DIR__ . '/Db.php';
require_once __DIR__ . '/Authenticate.php';

if (empty($_GET['username']) || empty($_GET['password'])) {
    echo 'Missing parameters "username" and "password".';
    return;
}

$insert = "INSERT INTO user
VALUES (
    NULL,
    '" . $_GET['username'] . "',
    1,
    MD5('" . $_GET['password'] . "')
)";

$response = $dbService->query($insert);

echo $dbService->error;

echo 'Added users: ' . (int) $response;
