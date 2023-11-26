<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Payment extends Entity
{

    protected $_accessible = [
        'sale_id' => true,
        'total_value' => true,
        'method' => true,
        'installments' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'status' => true,
        'sale' => true,
    ];
}
