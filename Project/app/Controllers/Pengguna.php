<?php

namespace App\Controllers;

use App\Models\UserModel;

class Pengguna extends BaseController
{
    public function profil($id = null)
    {

        $model = new UserModel();

        $data['user'] = $model->where('Username', $id)->first();

        return view('profil', $data);
    }
    public function edit($id = null)
    {

        $model = new UserModel();

        $data['user'] = $model->where('Username', $id)->first();

        return view('edit_profil', $data);
    }
    public function update()
    {

        $model = new UserModel();
        $Username = $this->request->getVar('Username');

        $data = [
            'FirstName' => $this->request->getVar('FirstName'),
            'LastName'  => $this->request->getVar('LastName'),
            'JK'  => $this->request->getVar('JK'),
            'Pekerjaan'  => $this->request->getVar('Pekerjaan'),
            'Telephone'  => $this->request->getVar('Telephone'),
            'Email'  => $this->request->getVar('Email'),
        ];

        $model->updateProfil($Username, $data);
        return redirect()->to('/profil/' . $Username);
    }
    //--------------------------------------------------------------------

}
