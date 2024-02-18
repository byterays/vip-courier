<?php

namespace App\Controllers;

use Exception;

class ConsignmentsController extends BaseController
{


    public function index()
    {
        if (!$this->session->get("logged_in"))  return redirect()->to("admin");
        $consignmentsModel = model(\App\Models\ConsignmentsModel::class);

        $filter = array();
        $consignments = $consignmentsModel->ListAll($filter);

        $data = [
            "bread_crumbs" => [
                ["text" => "Admin", "link" => "/", "class" => ""],
                ["text" => "Consignments", "link" => "/", "class" => "active"],
            ],
            "post_import" => false,
            "import_error" => false,
            "consignments" => $consignments
        ];


        return view('admin/consignments/list', $data);
    }

    public function import()
    {
        if (!$this->session->get("logged_in"))  return redirect()->to("admin");
        $data = [
            "bread_crumbs" => [
                ["text" => "Admin", "link" => "/", "class" => ""],
                ["text" => "Consignments", "link" => "/", "class" => "active"],
            ],
        ];

        return view("admin/consignments/import", $data);
    }

    public function postImport()
    {
        $success = 0;
        $fail = 0;

        $failed_inserts = [];

        $consignmentsModel = model(\App\Models\ConsignmentsModel::class);

        $handle = fopen($_FILES["data-file"]["tmp_name"], 'r');
        $isHeader = true;
        while (($data = fgetcsv($handle)) !== FALSE) {
            if ($isHeader) {
                $isHeader = false;
                continue;
            }

            $consignment_data = [
                "internal_lrn" => $data[0],
                "provider_lrn" => $data[1],
                "provider" => "delhivery",
                "sender_name" => $data[2],
                "sender_phone" => $data[3],
                "pickup_location" => $data[4],
                "pickup_date" => $data[5],
                "receiver_name" => $data[6],
                "receiver_phone" => $data[7],
                "delivery_location" => $data[8]
            ];

            // try {
            if ($consignmentsModel->AddConsignment($consignment_data)) {
                $success++;
            } else {
                $failed_inserts[] = $data;
                $fail++;
            }
        }

        if ($fail == 0) {
            $this->session->setFlashdata('import_message', 'Consignments imported successfully.');
        } else if ($success == 0) {
            $this->session->setFlashdata('import_message', 'Consignments import failed.');
        } else {
            $this->session->setFlashdata('import_message', 'Consignments imported partially.');
        }

        $consignmentsModel = model(\App\Models\ConsignmentsModel::class);

        $filter = array();
        $consignments = $consignmentsModel->ListAll($filter);
        $response = [
            "bread_crumbs" => [
                ["text" => "Admin", "link" => "/", "class" => ""],
                ["text" => "Consignments", "link" => "/", "class" => "active"],
            ],
            "success" => $success, "fail" => $fail,
            "import_error" => $fail > 0,
            "failed_inserts" => $failed_inserts,
            "consignments" => $consignments
        ];

        return view('admin/consignments/list', $response);
    }
}
