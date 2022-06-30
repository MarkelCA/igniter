<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function getIndex()
    {


        $userModel = new \App\Models\UserModel();

        $current_timpestamp = time();

        $data = [
            'username' => 'larth',
            'mail'    => 'd.vader@theempire.com',
            'created_at' => $current_timpestamp,
            'updated_at' => $current_timpestamp,
            'deleted_at' => $current_timpestamp
        ];

        //$userModel->insert($data);
        $users = $userModel->findAll();
        //d($users);
        return json_encode($users);
    }
}
