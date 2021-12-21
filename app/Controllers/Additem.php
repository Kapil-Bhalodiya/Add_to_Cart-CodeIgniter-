<?php
namespace App\Controllers;

use App\Models\AdditemM;

class Additem extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        $data['valid'] = null;
        $rule = [
            'name' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'category' => 'required',
            'img' => 'uploaded[img]|max_size[img,1024]|ext_in[img,png,jped,jpg]'
        ];
        if ($this->request->getMethod() == "post") {
            $name = $this->request->getVar('name');
            $pass = $this->request->getVar('price');
            $qty = $this->request->getVar('qty');
            $cat = $this->request->getVar('category');
            $img = $this->request->getFile('img');

                if ($this->validate($rule)) {
                    if($img->isValid() && (!$img->hasMoved()))
                    {
                        $newfilename = $img->getRandomName();
                        if($img->move(WRITEPATH.'upload/',$newfilename)){
                            $data1 = [
                                'name' => $name,
                                'price' => $pass,
                                'qty' => $qty,
                                'cat_id' => 1,
                                'img' => $newfilename
                            ];
                            echo "Uploaded or insered..!";
                            $ins = new AdditemM();
                            $ins->itemAdd($data1);
                        }
                    }else{
                        echo "FIle is not valid";
                    }
                }
        }
        
    }
}
?>