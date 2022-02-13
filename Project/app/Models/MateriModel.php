<?php

namespace App\models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table = 'materi';
    protected $primaryKey = 'KodeMateri';
    protected $allowedFields = ['KodeMateri', 'NamaMateri', 'link', 'KodeKelas'];
}
