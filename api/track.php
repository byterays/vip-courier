<?php

require_once '../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Message\Request;

class PackageTracker
{
    public function GetMwbn($lrn)
    {
        $client = new Client();
        $api_url = "https://btob.api.delhivery.com/v2/track/{$lrn}?mwbn=true";       
        $request = new Request('GET', $api_url);
        $response = $client->send($request);
        $result = (string)$response->getBody();
        return $result;
    }

    public function TrackPackge($mwbn){
        $client = new Client();
        $api_url = "https://dlv-api.delhivery.com/v3/unified-tracking?wbn={$mwbn}";       
        $request = new Request('GET', $api_url);
        $response = $client->send($request);
        $result = (string)$response->getBody();
        return $result;        
    }
}

function translate_lrn($local_lrn, $provider)
{
    $lrn = "259997681";
    return $lrn;
}

?>

<?php
$local_lrn = $_GET["lrn"];

if (intval($local_lrn) <= 0) {
    $response = array("error" => true, "message" => "Invalid Tracking Number", "data" => []);
    header("Content-Type: application/json");
    echo json_encode($response);
    die();
}

$lrn = translate_lrn($local_lrn, $provider);

$tracker = new PackageTracker();
$lrn = translate_lrn($lrn, "delivery");
$result = $tracker->GetMwbn($lrn);

$json_result = json_decode($result);
$mwbn = $json_result->mwbn;

$track_result = $tracker->TrackPackge($mwbn);

header("Content-Type: application/json");
echo $track_result;