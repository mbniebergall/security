<?php

if (empty($_GET['test'])) {
    echo 'Missing GET of "test"';
    return;
}

var_dump(filter_input(INPUT_GET, 'test', FILTER_SANITIZE_NUMBER_INT));
