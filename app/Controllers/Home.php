<?php

namespace App\Controllers;

use  App\Models\PessoasModel;
use  App\Models\CarrosModel;
use  App\Models\MotosModel;

class Home extends BaseController
{
    public function index()
    {
        // return view('home');
        echo view('template/header');
        echo view('home');
        echo view('template/footer');
    }

    public function page($page='home') {

        echo view('template/header');
        echo view($page);
        echo view('template/footer');

    }

    public function pessoas(){
        $model = new PessoasModel();

        $data = [
            'title'=>'Pessoas',
            'pessoas'=>$model->getPessoas(),
            'session' => \Config\Services::session()
        ];

        if(!$data['session']->get('logado')){
            return redirect('login');
        }

        echo view('template/header');
        echo view('pessoa',$data);
        echo view('template/footer');
    }

    public function login() {
        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }

    public function logar() {
        $model = new PessoasModel();

        $senha = $this->request->getVar('senha');
        $nome = $this->request->getVar('nome');

        $data['usuario'] = $model->userLogin($nome, $senha);
        $data['session'] = \Config\Services::session();

        if(empty($data['usuario'])) {
            return redirect('login');
        } 
        else {
            $sessionData = [
                'usuario' => $nome,
                'logado' => true
            ];
            $data['session']->set($sessionData);
            return redirect('pessoa');
        }
    }

    public function carros(){
        $model = new CarrosModel();

        $data = [
            'title'=>'Carros',
            'carros'=>$model->getCarros(),
            'session' => \Config\Services::session()
        ];

        if(!$data['session']->get('logado')){
            return redirect('login');
        }

        echo view('template/header');
        echo view('carro',$data);
        echo view('template/footer');
    }

    public function motos(){
        $model = new MotosModel();

        $data = [
            'title'=>'Motos',
            'motos'=>$model->getMotos(),
            'session' => \Config\Services::session()
        ];

        if(!$data['session']->get('logado')){
            return redirect('login');
        }

        echo view('template/header');
        echo view('moto',$data);
        echo view('template/footer');
    }


    public function cadastro() {

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){
            return redirect('login');
        }

        echo view ('template/header');
        echo view ('cadastro-pessoas');
        echo view ('template/footer');
    }

    public function cadastroCarros() {

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){
            return redirect('login');
        }
        echo view ('template/header');
        echo view ('cadastro-veiculos');
        echo view ('template/footer');
    }
    public function cadastroMotos() {

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){
            return redirect('login');
        }
        echo view ('template/header');
        echo view ('cadastro-motos');
        echo view ('template/footer');
    }



    public function gravar() {
        $model = new PessoasModel();

        $model->save([
            'id' => $this->request->getVar('id'),
            'nome' => $this->request->getVar('nome'),
            'profissao' => $this->request->getVar('profissao'),
            'idade' => $this->request->getVar('idade')
        ]);

        return redirect('pessoa');
    }

    public function gravarCarros() {
        $model = new CarrosModel();

        $model->save([
            'id' => $this->request->getVar('id'),
            'modelo' => $this->request->getVar('modelo'),
            'marca' => $this->request->getVar('marca'),
            'cor' => $this->request->getVar('cor'),
            'placa' => $this->request->getVar('placa')
        ]);

        return redirect('carro');
    }

    public function gravarMotos() {
        $model = new MotosModel();

        $model->save([
            'id' => $this->request->getVar('id'),
            'modelo' => $this->request->getVar('modelo'),
            'marca' => $this->request->getVar('marca'),
            'cor' => $this->request->getVar('cor'),
            'placa' => $this->request->getVar('placa')
        ]);

        return redirect('moto');
    }


    public function excluir($id = null) {
        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){
            return redirect('login');
        }

        $model = new PessoasModel();
        $model->delete($id);
        return redirect('pessoa');
    }

    public function excluirCarros($id = null) {
        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){
            return redirect('login');
        }

        $model = new CarrosModel();
        $model->delete($id);
        return redirect('carro');
    }

    public function excluirMotos($id = null) {
        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){
            return redirect('login');
        }

        $model = new MotosModel();
        $model->delete($id);
        return redirect('moto');
    }

    public function editar($id = null) {
        $model = new PessoasModel();
        $data = [
            'pessoa' => $model->getPessoa($id),
            'session'=> \Config\Services::session()
        ];

        if(!$data['session']->get('logado')){
            return redirect('login');
        }

        echo view ('template/header');
        echo view ('cadastro-pessoas', $data);
        echo view ('template/footer');
    }

    public function editarCarros($id = null) {
        $model = new CarrosModel();
        $data = [
            'carro' => $model->getCarro($id)
        ];

        echo view ('template/header');
        echo view ('cadastro-veiculos', $data);
        echo view ('template/footer');
    }

    public function editarMotos($id = null) {
        $model = new MotosModel();
        $data = [
            'moto' => $model->getMoto($id)
        ];

        echo view ('template/header');
        echo view ('cadastro-motos', $data);
        echo view ('template/footer');
    }

    public function sair() {
        $data['session'] =  \Config\Services::session();
        $data['session']->destroy();
        return redirect('login');
    }
}
