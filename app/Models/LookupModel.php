<?php

namespace App\Models;

use CodeIgniter\Model;

class LookupModel extends Model
{

    protected $table = 'lrn_lookup';
    protected $allowedFields = ['internal_lrn', 'provider_lrn', 'provider'];
   
    
    public function AddLookupData($data)
    {

        $keyValues = [
            'internal_lrn' => $data["internal_lrn"], // Part of the composite key
            'provider_lrn' => $data["provider_lrn"]  // Part of the composite key
        ];

        if(!$this->existsWithCompositeKey($keyValues)){
            return @$this->insert($data, false);
        }else{
            return false;
        }

        
    }

    private function existsWithCompositeKey(array $keyValues): bool
    {
        $builder = $this->db->table($this->table);

        // Apply conditions for each part of the composite key
        foreach ($keyValues as $field => $value) {
            $builder->where($field, $value);
        }

        // Check if a record exists
        return $builder->countAllResults() > 0;
    }

}