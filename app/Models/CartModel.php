<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart_item';
    protected $allowedFields = ['user_id', 'product_id', 'size', 'quantity', 'preferences', 'total_amount'];
    public function getUserCart($uid = null)
    {
        return $this->asArray()
            ->select('coffee_name, size, quantity, preferences, total_amount')
            ->join('coffee_list', 'coffee_list.id = product_id')
            ->where(['user_id' => $uid])
            ->findAll();
    }
    public function findDupes($pid = NULL, $size = NULL, $preferences = NULL)
    {
        return $this->asArray()
            ->where(['product_id' => $pid, 'size' => $size, 'preferences' => $preferences])
            ->find();
    }
}
