<?php
    include 'request.php';
    include 'validations.php';

    $server = validateServer();
    $loc = validateLoc();

    echo request($server, $loc, 'localization.xml');
?>