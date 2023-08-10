<?php

namespace App\Models;

use CodeIgniter\Model;

class ImgModel extends Model
{
    protected $table      = 'galeria';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['ID','img'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';/

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;/

    public function GetUrl()
    {
      $result = $this->db->query('SELECT * FROM galeria');
      return $result->getResult();
    }
}

 ?>
