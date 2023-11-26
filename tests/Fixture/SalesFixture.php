<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesFixture
 */
class SalesFixture extends TestFixture
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
                'total_value' => 1,
                'customer_name' => 'Lorem ipsum dolor sit amet',
                'customer_number' => 'Lorem ipsum dolor sit amet',
                'customer_phone' => 'Lorem ipsum dolor sit amet',
                'customer_email' => 'Lorem ipsum dolor sit amet',
                'customer_address' => 'Lorem ipsum dolor sit amet',
                'note' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-11-24 19:26:04',
                'modified' => '2023-11-24 19:26:04',
                'paid' => '2023-11-24 19:26:04',
                'status' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
