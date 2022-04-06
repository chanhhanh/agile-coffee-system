<?php

namespace App\Models;

use CodeIgniter\Model;



class OrderDelivery extends Model
{
    protected $table = "order_delivery";
    protected $createdField  = 'updated_at';

    public function getAllOrder($status = 0)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('order_delivery')
            ->join('order_item_delivery', 'order_item_delivery.order_id = order_delivery.id')
            ->where('order_delivery.status', $status)
            ->groupBy('order_item_delivery.order_id')
            ->selectSum('quantity')
            ->select('order_delivery.id, order_item_delivery.id');

        return $builder->get();
    }
}
