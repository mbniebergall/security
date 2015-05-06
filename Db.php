<?php

require_once __DIR__ . '/configuration.php';

$dbService = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
echo print_r($dbService->connect_error, true);
