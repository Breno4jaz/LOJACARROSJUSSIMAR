<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class Carros extends Seeder
{
    public function run() {

        $nome = ['S90', 'SVJ', 'TURBO S', 'MUSTANG GT','MC20'];
        for($x = 0; $x < 5; $x++){
            $data = [
                'modelo' => $nome[$x],
                'marca' => 'GENERICA',
                'cor' => 'BRANCO',
                'placa' => 'ABC0123'
            ];
            $this->db->table('tb_carros')->insert($data);
            
        }



    }
}