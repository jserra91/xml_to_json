<?php
    include 'request.php';
    include 'validations.php';

    $server = validateServer();
    $loc = validateLoc();
    $category = validateCategory();
    $type = validateType();

    echo requestH($server, $loc, $category, $type, 'highscore.xml');
?>