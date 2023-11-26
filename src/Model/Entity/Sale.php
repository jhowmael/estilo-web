<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Sale extends Entity
{

    protected $_accessible = [
        'total_value' => true,
        'customer_name' => true,
        'customer_number' => true,
        'customer_phone' => true,
        'customer_email' => true,
        'customer_address' => true,
        'note' => true,
        'created' => true,
        'modified' => true,
        'paid' => true,
        'status' => true,
        'payments' => true,
        'sale_products' => true,
    ];
}
