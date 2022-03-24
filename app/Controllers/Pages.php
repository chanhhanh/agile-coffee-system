<?php

namespace App\Controllers;

use App\Models\CoffeeModel;

class Pages extends BaseController
{
    public function index()
    {
        $model = new CoffeeModel();
        $data["seasonal_coffee"] = $model->getSeasonalCoffee();
        $data["top_5_popular"] = $model->getTop5Popular();
        echo view("templates/header", $data);
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
