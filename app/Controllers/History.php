<?php

namespace App\Controllers;

use App\Models\OrderDelivery;
use App\Models\CartModel;

class History extends BaseController
{

    public function index()
    {
        $order_delivery_model = new OrderDelivery();
        $cart_model = new CartModel();

        $user_id = session()->has('id') ? session()->get('id') : NULL;

        $data_history = [
            'list_orders' => $order_delivery_model->getAllOrder($user_id),
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

    public function cancelOrder()
    {
        $request = \Config\Services::request();
        $user_id = session()->has('id') ? session()->get('id') : NULL;
        $order_id = $request->getPost('order_id');

        // TODO valid order id of user
        $order_delivery_model = new OrderDelivery();
        $order_delivery_model->update($order_id, ['status' => 4]);

        return redirect()->route('history');
    }
}
