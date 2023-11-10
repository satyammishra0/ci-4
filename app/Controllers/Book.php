<?php

namespace App\Controllers;

class Book extends BaseController
{


    public function index()
    {
        echo view('book/list.php');
    }

    public function create()
    {
        $session = \Config\Services::session();

        helper('form');

        $data = [];
        if ($this->request->getMethod() == "post") {
            $input = $this->validate(
                [
                    'name' => "required|min_length[5]",
                    'author' => "required|min_length[5]",
                ]
            );

            if ($input == true) {
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('book/create.php', $data);
    }
}
