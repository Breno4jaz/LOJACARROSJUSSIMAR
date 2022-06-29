<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class Motos extends Seeder
{
    public function run() {

        $nome = ['S1000RR', 'FAT BOY', 'H2R', 'DIAVEL','MARCOS'];
        for($x = 0; $x < 5; $x++){
            $data = [
                'modelo' => $nome[$x],
                'marca' => 'GENERICA',
                'cor' => 'VERMELHO',
                'placa' => 'AOU9812'
            ];
            $this->db->table('tb_motos')->insert($data);
            
        }



    }
}