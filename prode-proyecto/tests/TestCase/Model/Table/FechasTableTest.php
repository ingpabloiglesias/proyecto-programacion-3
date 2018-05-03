<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FechasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FechasTable Test Case
 */
class FechasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FechasTable
     */
    public $Fechas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fechas',
        'app.campeonatos',
        'app.encuentros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fechas') ? [] : ['className' => FechasTable::class];
        $this->Fechas = TableRegistry::get('Fechas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fechas);

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
