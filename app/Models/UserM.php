<?php
namespace App\Models;
use CodeIgniter\Model;

class UserM extends Model 
{
    public function viewItem()
    {

        $db = \Config\Database::connect('default');
        $builder = $db->table('item');
        $query = $builder->get();
        $result['getData'] = $query->getResult();
        print_r($result);
        return $result;
    }
}