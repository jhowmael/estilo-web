<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class SaleProduct extends Entity
{

    protected $_accessible = [
        'sale_id' => true,
        'product_id' => true,
        'discount_value' => true,
        'total_value' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'status' => true,
        'sale' => true,
        'product' => true,
    ];
}
