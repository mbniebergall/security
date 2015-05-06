<?php

require_once __DIR__ . '/Db.php';
require_once __DIR__ . '/Authenticate.php';

if (   empty($_GET['username'])
    || empty($_GET['password'])
    || empty($_GET['id'])
    || !array_key_exists('enabled', $_GET)
) {
    echo 'Required parameters are "id", "username", "password", and "enabled".';
    return;
}

$insert = "UPDATE user
SET username = '" . $_GET['username'] . "',
    password = MD5('" . $_GET['password'] . "'),
    enabled  = " . $_GET['enabled'] . "
WHERE id = " . $_GET['id'];

$response = $dbService->query($insert);

echo $dbService->error;

echo 'Updated user: ' . (int) $response;
