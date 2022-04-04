<?php

namespace App\Controllers;

use App\Models\OrderDelivery;
use App\Models\CartModel;

class History extends BaseController
{
    public function index()
    {
        $model = new OrderDelivery();
        $cart_model = new CartModel();
        $user_id = session()->has('id') ? session()->get('id') : NULL;
        $datahistory["list_orders"] = $model->getAllOrder();
        $data["cart_item"] = $cart_model->getUserCart($user_id);
        echo view("templates/header", $data);
        echo view("pages/history", $datahistory);
        echo view("templates/footer");
    }
}
