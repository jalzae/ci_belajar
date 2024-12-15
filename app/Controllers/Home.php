<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    protected $model;
    protected $validation;
    public function __construct()
    {
        $this->model = new User();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $users = $this->model->findall();
        return view('index', ['title' => 'Latihan', 'users' => $users]);
    }

    public function tambah()
    {
        return view('form/tambah');
    }

    public function save()
    {
        //kita nerima data dari view 
        $username = $this->request->getVar('username');
        //sanitize/cek data harus valid 
        $this->validation->setRules([
            'username' => 'required|min_length[8]',
        ]);

        if (!$this->validation->run(['username' => $username])) {
            return view('form/tambah', ['error' => $this->validation->getErrors()]);
        }

        $checkUser = $this->model->checkUsername($username);
        if ($checkUser) {
            echo "Username sudah ada";
            die();
        }

        //insert 
        $save = $this->model->create(['username' => $username]);

        //jika insert berhasil menuju halaman index 
        if ($save) {
            return redirect()->to('/');
        } else {
            //kalau gagal tampilkan gagalnya 
            echo "Gagal tulis data";
        }
    }

    public function edit($id)
    {
        $user = $this->model->getId($id);
        if ($user) {
            return view('form/edit', ['user' => $user]);
        } else {
            echo "Data tidak ada";
        }
    }

    public function update($id)
    {
        $username = $this->request->getVar('username');

        $update = $this->model->patch($id, ['username' => $username]);
        if ($update) {
            return redirect()->to('/');
        } else {
            echo "Update tidak berhasil";
        }
    }

    public function delete($id)
    {
        $update = $this->model->destroy($id);
        if ($update) {
            return redirect()->to('/');
        } else {
            echo "Delete tidak berhasil";
        }
    }
}
