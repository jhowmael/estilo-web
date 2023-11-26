<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesTable Test Case
 */
class SalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesTable
     */
    protected $Sales;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sales',
        'app.Payments',
        'app.SaleProducts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sales') ? [] : ['className' => SalesTable::class];
        $this->Sales = $this->getTableLocator()->get('Sales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sales);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SalesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
