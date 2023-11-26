<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SaleProductsFixture
 */
class SaleProductsFixture extends TestFixture
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
                'product_id' => 1,
                'discount_value' => 1,
                'total_value' => 1,
                'created' => '2023-11-24 19:26:01',
                'modified' => '2023-11-24 19:26:01',
                'deleted' => '2023-11-24 19:26:01',
                'status' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
