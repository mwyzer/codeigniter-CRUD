<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use App\Models\UsersModel;


class Users extends BaseController
{
    private $User;
    public function __construct()
    {
        $this->User = new UsersModel();
    }
    public function index()
    {
        $data['users'] = $this->User->getUsers();
        return view('users/index', $data);
    }
    public function add()
    {
        return view('users/add');
    }

    public function save() {
        $nama=$this->request->getVar('nama');
        $kelamin=$this->request->getVar('kelamin');
        $username=$this->request->getVar('username');
        $password=$this->request->getVar('password');

        $data=[
            'nama'=>$nama,
            'kelamin'=>$kelamin,
            'username'=>$username,
            'password'=>$password,
        ];

        $this->User->save($data);
        return redirect()->to('/users');
    }

    public function ubah($id){
        $data['users'] = $this->User->getUsers($id);
        return view('users/ubah', $data);
    }

    public function update() 
    {
        $id = $this->request->getVar('kode');
        $nama = $this->request->getVar('nama');
        $kelamin = $this->request->getVar('kelamin');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = [
            'id_users' => $id,
            'nama_users' => $nama,
            'kelamin_users' => $kelamin,
            'username' => $username,
            'password' => $password
        ];
        $this->User->Save($data);
        return redirect()->to('/users');
    }
    public function delete($id)
    {
        $this->User->delete($id);
        return redirect()->to('/users');
    }
    public function trash(){
        $data['users']=$this->User->onlyDeleted()->findAll();
        return view('users/trash', $data);
    }
    public function restore($id){
        $data=[
            'id_users' => $id,
            'deleted_at' => NULL
        ];

        $this -> User -> save($data);
        return redirect()->to('/users');
    }
}
