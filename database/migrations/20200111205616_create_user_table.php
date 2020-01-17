<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Util\Literal;

class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $users = $this->table('users');

        $users->addColumn('username', 'string', ['limit' => 20])
            ->addColumn('password', 'string', ['limit' => 255])
            ->addColumn('email', 'string', ['limit' => 40])
            ->addColumn('phone', 'string', ['limit' => 40])
            ->addColumn('name', 'string', ['limit' => 30])
            ->addColumn('created', 'datetime', ['timezone' => true, 'default' => Literal::from('NOW()')])
            ->addIndex(['username', 'email'], ['unique' => true])
            ->create();
    }
}
