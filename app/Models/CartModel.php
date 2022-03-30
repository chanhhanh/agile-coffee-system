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
            ->where(['user_id' => $uid])
            ->findAll();
    }
}
