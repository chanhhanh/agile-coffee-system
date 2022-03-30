<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\CoffeeModel;

class Order extends BaseController
{
    public function AddToCart()
    {
        $cmodel = new CoffeeModel();
        $data = [];
        $user_id = session()->has('id') ? session()->get('id') : NULL;
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            //yeets the user if he tries to buy a sold-out item
            $data = $cmodel->getSingleCoffee($this->request->getVar('product_id'));
            if ($data[0]["sold_out"] == 1 || $user_id == NULL)
                return redirect()->to(base_url());
            //server-side price calculation
            switch ($this->request->getVar('size')) {
                case "S":
                    $total_amount = $data[0]['price_s'] *  $this->request->getVar('quantity');
                    break;
                case "M":
                    $total_amount = $data[0]['price_m'] *  $this->request->getVar('quantity');
                    break;
                case "L":
                    $total_amount = $data[0]['price_l'] *  $this->request->getVar('quantity');
                    break;
            }
            //validation
            $rules = [
                'size' => 'required|in_list[S,M,L]',
                'sweetness' => 'in_list[0,Sweetness 1,Sweetness 2]',
                'milk' => 'in_list[0,Milk 1,Milk 2]',
                'quantity' => 'required|greater_than[0]|less_than[21]',
            ];

            $errors = [
                "*" => 'Request Invalid.'
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new CartModel();
                $preferences = ($this->request->getVar('sweetness') == 0 && $this->request->getVar('milk') == 0)
                    ? "NULL" :
                    $this->request->getVar('sweetness') . " " . $this->request->getVar('milk');
                $newData = [
                    'user_id' => $user_id,
                    'product_id' => $this->request->getVar('product_id'),
                    'size' => $this->request->getVar('size'),
                    'quantity' => $this->request->getVar('quantity'),
                    'preferences' => $preferences,
                    'total_amount' => $total_amount
                ];
                $model->save($newData);
                session()->setFlashdata('success', 'Order Successful.');
            }
        }
        $model = new CoffeeModel();
        $cart_model = new CartModel();
        $data["coffee_type"] = $model->getCoffeeType();
        $data["coffees"] = $model->getCoffee();
        $data["cart_item"] = $cart_model->getUserCart($user_id);
        echo view('templates/header', $data);
        echo view('pages/menu');
        echo view('templates/footer');
    }
}
