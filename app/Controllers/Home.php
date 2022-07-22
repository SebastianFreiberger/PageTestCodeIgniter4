<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $this->loadViews("index");

    }

    public function loadViews($view=null){
        echo view("includes/header");
        echo view($view);
        echo view("includes/footer");
    }
}
