<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function dashboard()
    {
        if(!$this->session->get("logged_in"))  return redirect()->to("admin");
        $consignmentsModel = model(\App\Models\ConsignmentsModel::class);

        $filter=array();
        $consignments = $consignmentsModel->ListAll($filter,1,10);

        print_r($consignments);
        exit;

        $data = [
            "bread_crumbs" => [
                ["text" => "Admin", "link" => "/", "class" => ""],
                ["text" => "Dashboard", "link" => "/", "class" => "active"],
            ],           
            "consignments" => $consignments
        ];

        return view("admin/dashboard", $data);
    }

    public function login()
    {
        
        $userModel = model(\App\Models\UserModel::class);
        $user = $userModel->AuthenticateUser($this->request->getPost("email"), $this->request->getPost("password")); // where(["login_name" => $this->request->getPost("email")])->first();
        if ($user) {
            
            $this->session->set($user);

            $data = [
                "bread_crumbs" => [
                    ["text" => "Admin", "link" => "/", "class" => ""],
                    ["text" => "Dashboard", "link" => "/", "class" => "active"],
                ],
            ];
           
            return redirect()->to("dashboard");           

        } else {
            return redirect()->to("admin");
        }
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to("admin");
    }
}
