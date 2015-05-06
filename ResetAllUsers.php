<?php

require_once __DIR__ . '/Db.php';
require_once __DIR__ . '/Authenticate.php';

$delete = "DELETE FROM user";

$response = $dbService->query($delete);

echo $dbService->error;

echo '<div>Deleted users: ' . (int) $response . '</div>';

// insert defaults

$insert = "INSERT INTO user
VALUES (
    NULL,
    'admin',
    1,
    MD5('password')
), (
    NULL,
    'guest',
    1,
    MD5('password12345')
), (
    NULL,
    'disableduser',
    0,
    MD5('letmein')
)";

$response = $dbService->query($insert);

echo $dbService->error;

echo '<div>Added users: ' . (int) $response . '</div>';
