<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MateriModel;
use App\Models\UserModel;

class Materi extends Controller
{

    public function index()
    {
        $model = new MateriModel();
        $userModel = new UserModel();

        $data['materi'] = $model->where('KodeKelas', 'H001')->findAll();
        $data['user'] = $userModel->where('Username', session('username'))->first();

        return view('html', $data);
    }

    public function cpp()
    {
        $model = new MateriModel();
        $userModel = new UserModel();

        $data['materi'] = $model->where('KodeKelas', 'C001')->findAll();
        $data['user'] = $userModel->where('Username', session('username'))->first();

        return view('C++', $data);
    }

    public function create()
    {
        return view('input_materi');
    }

    public function store()
    {

        $model = new MateriModel();

        $data = [
            'NamaMateri' => $this->request->getVar('NamaMateri'),
            'link'  => $this->request->getVar('link'),
            'KodeKelas'  => $this->request->getVar('KodeKelas'),
        ];

        $save = $model->insert($data);
        return redirect()->to('/html');
    }

    public function edit($id = null)
    {

        $model = new MateriModel();

        $data['materi'] = $model->where('KodeMateri', $id)->first();

        return view('edit_materi', $data);
    }

    public function update()
    {

        $model = new MateriModel();
        $KodeMateri = $this->request->getVar('KodeMateri');

        $data = [
            'NamaMateri' => $this->request->getVar('NamaMateri'),
            'link'  => $this->request->getVar('link'),
            'KodeKelas'  => $this->request->getVar('KodeKelas'),
        ];

        $save = $model->update($KodeMateri, $data);
        return redirect()->to('/html');
    }

    public function delete($id = null)
    {

        $model = new MateriModel();

        $del = $model->where('KodeMateri', $id)->delete();
        return redirect()->to('/html');
    }
    public function vidio($id = null)
    {

        $model = new MateriModel();
        $userModel = new UserModel();

        $data['materi'] = $model->where('KodeMateri', $id)->first();
        $data['user'] = $userModel->where('Username', session('username'))->first();

        return view('materi_vidio', $data);
    }
}
