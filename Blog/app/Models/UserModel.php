<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['ID','username','email','password','token'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';/

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;/

    public function getUserByEmail($email)
    {
      $result = $this->where('email',$email)->find();
      if(count($result)!=0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getUserIDByToken($cookie)
    {
      $result = $this->where('token',$cookie)->find();
      if(count($result)!=0)
        {
            return $result[0]['ID'];
        }
        else
        {
            return false;
        }
    }
}

 ?>
