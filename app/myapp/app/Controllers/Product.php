<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index(int $num)
    {
        return "This is the product $num";
    }
}
