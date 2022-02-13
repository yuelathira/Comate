<?php

namespace App\models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pengguna';
    protected $allowedFields = ['Username', 'password', 'FirstName', 'LastName', 'JK', 'Pekerjaan', 'Telephone', 'Email', 'foto'];
    protected $beforeInsert = ['beforeInsert'];
    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }
    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }
    public function updateProfil($Username, $data)
    {
        $query = $this->db->table($this->table)->update($data, array('Username' => $Username));
        return $query;
    }
}
