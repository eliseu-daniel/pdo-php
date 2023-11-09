<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // index para listar         -> ok
    // show para mostrar um item
    // create para criar um item -> ok    
    // store para salvar um item -> ok
    // edit para editar um item  -> ok
    // update para atualizar um item
    // destroy para deletar um item -> ok

    private $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function index()
    {
        $usuarios = $this->model->all();
        $this->view('user/index', [
            'usuarios' => $usuarios
        ]);
    }

    public function create()
    {
        $this->view('user/create');
    }

    public function store($data)
    {
        $this->model->create($data);
        $this->redirect('/');
    }

    public function edit(){
        
        $this->view('user/edit');
    }

    public function show($id)
    {
        $usuarios = $this->model->all();
        $this->view('user/edit', [
            'usuarios' => $usuarios
        ]);

    }

    public function update($id, $data)
    {
        $this->model->update1($id, $data);
        $this->redirect('/');
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}