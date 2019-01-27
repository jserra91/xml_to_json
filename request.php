<?php
    include 'xml2json.php';

    function request($server, $loc, $resource) {
        $url = 'https://' . $server . '-' . $loc . '.ogame.gameforge.com/api/' . $resource;
        return commonRequest($url);
    }

    function requestH($server, $loc, $cat, $type, $resource) {
        $url = 'https://' . $server . '-' . $loc . '.ogame.gameforge.com/api/' . $resource . '?category=' . $cat .'&type=' . $type;
        return commonRequest($url);
    }

    function requestId($server, $loc, $id, $resource) {
        $url = 'https://' . $server . '-' . $loc . '.ogame.gameforge.com/api/' . $resource . '?id=' . $id;
        return commonRequest($url);
    }

    function commonRequest($url) {
        $xmlNode = simplexml_load_file($url);
        $arrayData = xmlToArray($xmlNode);
        header('Content-Type: application/json');
        return json_encode($arrayData);
    }
?>
