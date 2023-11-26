<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SaleProductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SaleProductsTable Test Case
 */
class SaleProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SaleProductsTable
     */
    protected $SaleProducts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SaleProducts',
        'app.Sales',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SaleProducts') ? [] : ['className' => SaleProductsTable::class];
        $this->SaleProducts = $this->getTableLocator()->get('SaleProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SaleProducts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SaleProductsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SaleProductsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
