<?php

declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentsFixture
 */
class PaymentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'sale_id' => 1,
                'total_value' => 1,
                'method' => 'Lorem ipsum dolor sit amet',
                'installments' => 1,
                'created' => '2023-11-24 19:25:28',
                'modified' => '2023-11-24 19:25:28',
                'deleted' => '2023-11-24 19:25:28',
                'status' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
