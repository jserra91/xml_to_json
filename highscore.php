<?php
    include 'request.php';
    include 'validations.php';

    $server = validateServer();
    $loc = validateLoc();
    $category = validateCategory();
    $type = validateType();

    echo request($server, $loc, 'players.xml');
?>