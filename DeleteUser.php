<?php

require_once __DIR__ . '/Db.php';
require_once __DIR__ . '/Authenticate.php';

if (empty($_GET['id'])) {
    echo 'Missing parameter "id".';
    return;
}

$insert = "DELETE FROM user
WHERE id = " . $_GET['id'];

$response = $dbService->query($insert);

echo $dbService->error;

echo 'Deleted users: ' . (int) $response;
