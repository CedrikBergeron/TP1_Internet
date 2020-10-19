<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompagniesAeriennesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompagniesAeriennesTable Test Case
 */
class CompagniesAeriennesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompagniesAeriennesTable
     */
    public $CompagniesAeriennes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompagniesAeriennes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompagniesAeriennes') ? [] : ['className' => CompagniesAeriennesTable::class];
        $this->CompagniesAeriennes = TableRegistry::getTableLocator()->get('CompagniesAeriennes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompagniesAeriennes);

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
}
