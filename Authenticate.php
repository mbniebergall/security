<?php

if (empty($_COOKIE['loggedIn'])) {
    echo 'User is not loggedIn. Missing cookie "loggedIn"';
    die;
}