<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
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
                'category' => 'Lorem ipsum dolor sit amet',
                'brand' => 'Lorem ipsum dolor sit amet',
                'color' => 'Lorem ipsum dolor sit amet',
                'size' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
                'note' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-11-24 19:25:37',
                'modified' => '2023-11-24 19:25:37',
                'deleted' => '2023-11-24 19:25:37',
                'status' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
