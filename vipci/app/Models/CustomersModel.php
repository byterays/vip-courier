<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomersModel extends Model
{
    protected $table      = 'consignments';
    
    public function ListAll($page=1, $limit=20)
    {        
        $offset = ($page-1)* $limit;
        $customers = $this->select("sender_phone")->groupBy("sender_phone")->offset($offset)->limit($limit)->get()->getResult();
       
        return $customers;
    }
}
