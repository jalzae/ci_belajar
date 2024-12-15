<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [
        'username'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    function get()
    {
        return $this->db->table($this->table)->get()->getResult('array');
    }

    function getId($id)
    {
        return $this->db->table($this->table)->where(['id' => $id])
            ->get()->getRowArray();
    }

    function checkUsername($username)
    {
        return $this->db->table($this->table)->where(['username' => $username])->get()->getRowArray();
    }

    function create($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    function patch($id, $data)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    function destroy($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
