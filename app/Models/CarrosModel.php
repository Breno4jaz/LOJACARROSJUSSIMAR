<?php

namespace App\Models; 

use CodeIgniter\Model;

class CarrosModel extends Model{
    
    protected $table = 'tb_carros';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['modelo', 'marca', 'cor', 'placa'];

    public function getCarros() {

        return $this->findAll();

    }

    public function getCarro($id) {
        return $this->asArray()->where(['id'=>$id])->first();
    }

}