<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomersModel extends Model
{
    protected $table      = 'consignments';
    
    public function ListAll($page=1, $limit=20)
    {        
        $offset = ($page-1)* $limit;
        $customers = $this->select("sender_name,sender_phone, count(*) consignments")->groupBy("sender_phone")
        ->offset($offset)->limit($limit)
        ->orderBy("id", "DESC")
        ->get()->getResult();
       
        return $customers;
    }
}
