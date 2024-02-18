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
            "lrn" => 0, 
            "basic_details" => [], 
            "full_details" => []
        ];

        $enable_tracking = false;
        if ($this->request->is('post')) {
            $code = $this->request->getPost("code");
            
            if($code>0){
                $consignmentsModel = model(\App\Models\ConsignmentsModel::class);
                $data = $consignmentsModel->TrackDelhiveryConsignment($code);
                $data["lrn"] = $code;
            }           
            
        }
       
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
