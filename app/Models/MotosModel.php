<?php

namespace App\Models; 

use CodeIgniter\Model;

class MotosModel extends Model{
    
    protected $table = 'tb_motos';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['modelo', 'marca', 'cor', 'placa'];

    public function getMotos() {

        return $this->findAll();

    }

    public function getMoto($id) {
        return $this->asArray()->where(['id'=>$id])->first();
    }

}