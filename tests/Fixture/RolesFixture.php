<?php
namespace CakeManager\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 *
 */
class RolesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'fixed' => null],
        'login_redirect' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '0000-00-00 00:00:00', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '0000-00-00 00:00:00', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'latin1_swedish_ci'
        ],
    ];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'name' => 'Administrators',
            'login_redirect' => 'admin/manager/users',
            'created' => '2014-12-30 13:22:01',
            'modified' => '2014-12-30 13:22:01'
        ],
        [
            'id' => 2,
            'name' => 'Moderators',
            'login_redirect' => '/',
            'created' => '2014-12-30 13:22:01',
            'modified' => '2014-12-30 13:22:01'
        ],
        [
            'id' => 3,
            'name' => 'Users',
            'login_redirect' => '/',
            'created' => '2014-12-30 13:22:01',
            'modified' => '2014-12-30 13:22:01'
        ],
    ];
}
