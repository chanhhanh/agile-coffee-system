<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view("templates/header");
        echo view("pages/home");
        echo view("templates/footer");
    }
    public function showme($page = "")
    {
        echo view("templates/header");
        echo view("pages/$page");
        echo view("templates/footer");
    }
}
