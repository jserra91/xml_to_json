<?php
    include 'request.php';
    include 'validations.php';

    $server = validateServer();
    $loc = validateLoc();
    $id = validateId();

    echo requestId($server, $loc, $id, 'playerData.xml');
?>