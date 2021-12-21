<?php
namespace App\Models;
use CodeIgniter\Model;

class AuthM extends Model 
{
    public function checkAuth($email)
    {
        $db = \Config\Database::connect('default');
        $builder = $db->table('login');
        $builder->where('emailid',$email);
        $query = $builder->get();
        if(count($query->getResultArray())==1)  return $query->getResultArray();
        else    return false;
    }
}
?>