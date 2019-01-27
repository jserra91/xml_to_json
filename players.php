<?php
    include 'xml2json.php';

    if (isset($_GET["server"])) {
        $server = $_GET["server"];
    } else {
        $server = 's1'
    }
    if (isset($_GET["loc"])) {
        $loc = $_GET["loc"];
    } else {
        echo
        $loc = 'es'
    }

    $xmlNode = simplexml_load_file('https://' + $server + '-' + $loc + '.ogame.gameforge.com/api/universes.xml');
    $arrayData = xmlToArray($xmlNode);
    header('Content-Type: application/json');
    echo json_encode($arrayData);
?>