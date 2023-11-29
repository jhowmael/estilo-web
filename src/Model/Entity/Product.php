<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Product extends Entity
{

    protected $_accessible = [
        'total_value' => true,
        'code' => true,
        'description' => true,
        'image' => true,
        'category' => true,
        'brand' => true,
        'color' => true,
        'size' => true,
        'gender' => true,
        'quantity' => true,
        'note' => true,
        'created' => true,
        'modified' => true,
        'canceled' => true,
        'status' => true,
        'sale_products' => true,
    ];
}
