<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CartesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CartesTable Test Case
 */
class CartesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CartesTable
     */
    protected $Cartes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cartes',
        'app.Categorias',
        'app.Produtos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cartes') ? [] : ['className' => CartesTable::class];
        $this->Cartes = $this->getTableLocator()->get('Cartes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cartes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
