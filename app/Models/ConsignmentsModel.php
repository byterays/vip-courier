<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsignmentsModel extends Model
{
    protected $table      = 'consignments';
    protected $allowedFields = ['internal_lrn', "provider_lrn", "provider", 'sender_name', 'sender_phone', 'pickup_location', 'receiver_name', 'receiver_phone', 'delivery_location'];


    public function ListAll($filter, $page = 1, $limit = 20)
    {
        $offset = ($page - 1) * $limit;


        $data = $this->where($filter)->findAll($limit, $offset);


        return $data;
    }

    public function AddConsignment($data)
    {
        $keyValues = [
            'internal_lrn' => $data["internal_lrn"], // Part of the composite key
            'provider_lrn' => $data["provider_lrn"]  // Part of the composite key
        ];


        if (!$this->existsWithCompositeKey($keyValues)) {
            $this->save($data);
            return true;
        }
        return false;
    }

    public function TrackDelhiveryConsignment($lrn)
    {
        $data=array();
        $basic_details = $this->GetMwbn($lrn);
        if($basic_details!=false){
            $full_details = $this->TrackPackge($basic_details->mwbn);
            $data=["basic_details"=>$basic_details, "full_details"=>$full_details];

        }
        return $data;
    }


    private function existsWithCompositeKey(array $keyValues): bool
    {
        $result = $this->where($keyValues)->findAll();
        return sizeof($result) > 0;
    }


    private function GetMwbn($lrn)
    {
        $delhivery_lrn = $this->translate_lrn($lrn, "delhivery");
        if ($delhivery_lrn!=false) {

            $client =  \Config\Services::curlrequest();
            $api_url = "https://btob.api.delhivery.com/v2/track/{$delhivery_lrn}?mwbn=true";
            $response = $client->request('GET', $api_url);
            //  $response = $client->send($request);
            $result = (string)$response->getBody();
            return json_decode($result);
        }
        return false;
    }

    public function TrackPackge($mwbn)
    {
        // $client = new Client();
        // $api_url = "https://dlv-api.delhivery.com/v3/unified-tracking?wbn={$mwbn}";
        // $request = new Request('GET', $api_url);
        // $response = $client->send($request);
        // $result = (string)$response->getBody();
        // return $result;

        $client =  \Config\Services::curlrequest();
        $api_url = "https://dlv-api.delhivery.com/v3/unified-tracking?wbn={$mwbn}";
        $response = $client->request('GET', $api_url);
        //  $response = $client->send($request);
        $result = (string)$response->getBody();
        return json_decode($result);
    }

    private function translate_lrn($internal_lrn, $provider)
    {
        $lrn = $this->where("internal_lrn", $internal_lrn)->first();

        if ($lrn) return $lrn["provider_lrn"];

        return false;
    }
}
