<?php

namespace App\Controllers;

use Exception;

class CustomersController extends BaseController
{
   

    public function index()
    {
        if (!$this->session->get("logged_in"))  return redirect()->to("admin");
        $model = model(\App\Models\CustomersModel::class);

        $filter = array();
        $customers = $model->ListAll();

        $data = [
            "bread_crumbs" => [
                ["text" => "Admin", "link" => "/", "class" => ""],
                ["text" => "Customers", "link" => "/", "class" => "active"],
            ],
            "post_import" => false,
            "import_error" => false,
            "data" => $customers
        ];


        return view('admin/customers/list', $data);
    }
}