<?php
namespace App\Models;
use CodeIgniter\Model;

class AdditemM extends Model 
{
    public function itemAdd($value)
    {
        $db = \Config\Database::connect('default');
        $builder = $db->table('item');
        $builder->ignore(true)->insert($value);
        echo "inserted..!";

        print_r($value);
        return;
        //if(count($query->getResultArray())==1)  return $query->getResultArray();
        //else    return false;
    }
}
?>