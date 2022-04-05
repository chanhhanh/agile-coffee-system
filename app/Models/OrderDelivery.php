<?php

namespace App\Models;

use CodeIgniter\Model;



class OrderDelivery extends Model
{
    protected $table = "order_delivery";
    protected $createdField  = 'updated_at';
    protected $allowedFields = ['status'];

    public function getAllOrder($user_id, $status = -1)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('order_delivery')
            ->join('order_item_delivery', 'order_item_delivery.order_id = order_delivery.id', 'left');

        if ($status != -1) {
            $builder = $builder->where('order_delivery.status', $status);
        }

        $builder = $builder->groupBy('order_delivery.id')
            ->where('user_id', $user_id)
            ->selectSum('quantity')
            ->select('order_delivery.id as order_id, order_item_delivery.id, order_delivery.total_amount as total_amount_order, status, ordered_at');

        return $builder->get();
    }
}
