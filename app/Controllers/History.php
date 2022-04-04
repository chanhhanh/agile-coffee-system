<?php

namespace App\Controllers;

use App\Models\OrderDelivery;

class History extends BaseController
{
    public function index()
    {
        $model = new OrderDelivery();
        $data["list_orders"] = $model->getAllOrder();
        echo view("templates/header");
        echo view("pages/history", $data);
        echo view("templates/footer");
    }
}
