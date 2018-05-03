<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EncuentrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EncuentrosTable Test Case
 */
class EncuentrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EncuentrosTable
     */
    public $Encuentros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.encuentros',
        'app.fechas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Encuentros') ? [] : ['className' => EncuentrosTable::class];
        $this->Encuentros = TableRegistry::get('Encuentros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Encuentros);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
