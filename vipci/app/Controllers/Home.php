<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('web/index');
    }

    public function track()
    {
       
        $data = [
            "lrn" => "", 
            "basic_details" => [], 
            "full_details" => []
        ];

        $enable_tracking = false;

        
        if ($this->request->is('post')) {
            $code = $this->request->getPost("code");
            
            if($code>0){
                $consignmentsModel = model(\App\Models\ConsignmentsModel::class);
                $data = $consignmentsModel->TrackDelhiveryConsignment($code);
                if(sizeof($data)>0){
                    $enable_tracking = true;
                }
                $data["lrn"] = $code;    
            }            
        }

        $data["enable_tracking"]=$enable_tracking;
       
      return view('web/track', $data);
    }

    public function services(): string
    {
        return view('web/services');
    }

    public function about(): string
    {
        return view('web/about');
    }
    public function contact(): string
    {
        return view('web/contact');
    }
}
