<?php
namespace App\Controllers;

use App\Models\UserM;
use CodeIgniter\Database\MySQLi\Result;

class User extends BaseController
{
    public function __construct()
    {
        
        helper('form');
    }
    public function index()
    {
        
        $obj = new UserM;
        $result['getData'] = $obj->viewItem();
        echo view('UserV',$result);
        
    }
}
?>