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

        $data_history = [
            'list_orders' => $model->getAllOrder($user_id),
        ];

        $data = [
            'cart_item' => $cart_model->getUserCart($user_id),
        ];

        // foreach ($data_history['list_orders']->getResult() as $row)
        //     print_r($row);
        echo view("templates/header", $data);
        echo view("pages/history", $data_history);
        echo view("templates/footer");
    }
}
