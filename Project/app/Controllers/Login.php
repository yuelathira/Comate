<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);
        helper('cookie');
        if (get_cookie('username') && get_cookie('password')) {
            $username = get_cookie('username');
            $password = get_cookie('password');
            $model = new UserModel();
            $user = $model->where('username', $username)
                ->first();
            if ($password == $user['password']) {
                $this->setUserSession($user);
            }
        }
        if (session()->get('isLoggedIn')) {
            return redirect()->to('html');
        }
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[6]|max_length[50]',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Username or Password don\'t match'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $user = $model->where('username', $this->request->getVar('username'))
                    ->first();
                $this->setUserSession($user);
                if (isset($_POST['remember'])) {
                    setcookie('username', $user['Username'], time() + 3600);
                    setcookie('password', $user['password'], time() + 3600);
                    return redirect()->to('/html');
                }
                return redirect()->to('/html');
            }
        }
        return view('login', $data);
    }
    private function setUserSession($user)
    {
        $data = [
            'username' => $user['Username'],
            'foto' => $user['foto'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }
    public function register()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[6]|max_length[50]|is_unique[pengguna.username]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $newData = [
                    'Username' => $this->request->getVar('username'),
                    'FirstName' => $this->request->getVar('firstname'),
                    'LastName' => $this->request->getVar('lastname'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'successful Registration');
                return redirect()->to('/');
            }
        }
        return view('signup', $data);
    }
    public function logout()
    {
        helper('cookie');
        session()->destroy();
        setcookie('username', '', time() - 3600);
        setcookie('password', '', time() - 3600);
        return redirect()->to('/');
    }
}
