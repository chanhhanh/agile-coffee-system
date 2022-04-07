<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\CoffeeModel;
use App\Models\AddressModel;


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
                'sweetness' => 'in_list[0, 1, 2]',
                'milk' => 'in_list[0, 1, 2]',
                'quantity' => 'required|greater_than[0]|less_than[21]',
            ];

            $errors = [
                "*" => 'Request Invalid.'
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                //remove dupes
                $cart = new CartModel();
                $cart_data = $cart->findDupes(
                    $this->request->getVar('product_id'),
                    $this->request->getVar('size'),
                    $this->request->getVar('sweetness'),
                    $this->request->getVar('milk'),
                );
                // print_r($cart_data);
                if (isset($cart_data[0]['id'])) {
                    $model = new CartModel();
                    $newData = [
                        'quantity' => $this->request->getVar('quantity'),
                        'total_amount' => $total_amount
                    ];
                    $model->update($cart_data[0]['id'], $newData);
                    session()->setFlashdata('success', 'Order Successful.');
                } else {
                    $model = new CartModel();
                    $newData = [
                        'user_id' => $user_id,
                        'product_id' => $this->request->getVar('product_id'),
                        'size' => $this->request->getVar('size'),
                        'quantity' => $this->request->getVar('quantity'),
                        'sweetness' => $this->request->getVar('sweetness'),
                        'milk' => $this->request->getVar('milk'),
                        'total_amount' => $total_amount
                    ];
                    $model->save($newData);
                    session()->setFlashdata('success', 'Order Successful.');
                }
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
    public function delivery()
    {
        $user_id = session()->has('id') ? session()->get('id') : NULL;
        if ($user_id == NULL) return redirect()->to(base_url());
        $model = new AddressModel();
        $cart_model = new CartModel();
        $data["cart_item"] = $cart_model->getUserCart($user_id);
        $data["addresses"] = $model->getUserAddress($user_id);
        echo view("templates/header", $data);
        echo view("pages/delivery");
        echo view("templates/footer");
    }
}
