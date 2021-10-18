<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateVisitorsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('visitors', [
            'id' => false,
            'primary_key' => 'id'
        ]);
        $table
            ->addColumn('id', 'uuid')
            ->addColumn('uin', 'integer', [
                'null' => false,
            ])
            ->addColumn('first_name', \Phinx\Util\Literal::from('citext'))
            ->addColumn('last_name', \Phinx\Util\Literal::from('citext'))
            ->addColumn('email', 'string', [
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'null' => false,
            ])
            ->addColumn('mobile', 'integer', [
                'null' => true,
                'default' => null
            ])
            ->addColumn('disabled', 'datetime', [
                'null' => true,
                'default' => null
            ])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex('uin', [
                'unique' => true,
                'name' => 'uniq_uin'
            ])
            ->create();
    }
}
