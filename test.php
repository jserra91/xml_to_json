<?php
// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value

function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);
	

    return $result;
}

$response = CallAPI('GET','https://s1-en.ogame.gameforge.com/api/universes.xml');

$xml = htmlentities($response);

$xml = serialize($xml);
$xml = str_replace("s:1563:", '', $xml);
$xml = str_replace(";", '', $xml);

echo $xml;

// Hasta aqui funciona
/*$xmlObject = simplexml_load_string($xml);

$jsonString = json_encode($xmlObject);
$jsonArray = json_decode($jsonString, true);*/
 
//var_dump out the $jsonArray, just so we can
//see what the end result looks like
//var_dump($jsonArray);

//echo json_encode($jsonString);
?>