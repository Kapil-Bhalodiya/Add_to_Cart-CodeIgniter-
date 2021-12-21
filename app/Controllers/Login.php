<?php
namespace App\Controllers;
use App\Models\AuthM;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->session = session();
    }
    public function index()
    {
        echo view('LoginV');
    }
    public function LoginClick()
    {
        $uname = $this->request->getVar('uname');
        $pass = $this->request->getVar('pwd');
        if ($uname == "admin" && $pass == "admin") echo view('AdminV');
        else {
            $data['valid'] = null;
            $rule = [
                'uname' => 'required',
                'pwd' => 'required'
            ];

            if ($this->request->getMethod() == "post") {
                if ($this->validate($rule)) {
                    $obj = new AuthM();
                    $userData = $obj->checkAuth($uname);
                    if ($userData) 
                    {
                        if ($pass == $userData[0]['password'])
                        {
                            $this->session->set('user', $userData[0]['emailid']);
                            return redirect()->to('http://localhost/CI/public/User');
                            //echo view('UserV');
                        }
                        else
                            echo "Sorry , invalid Password..!";     
                    } 
                    else
                        echo "Sorry , invalid Email..!";
                } else
                    $data['valid'] = $this->validator;
            }
            //echo view('LoginV',$data);
        }
    }
}
