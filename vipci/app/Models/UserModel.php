<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    
    public function AuthenticateUser($username, $password)
    {
        
        $user = $this->where(["login_name" => $username])->first();
        if ($user) {
            
            if( password_verify($password, $user["password"] )){
                $data=[
                    'user_id' => $user["id"],
                    'display_name'=> $user["display_name"],
                    'email'=> $user["login_name"],
                    'logged_in' => true
                ];

                return $data;
            }
        }
        return false;
    }
}
