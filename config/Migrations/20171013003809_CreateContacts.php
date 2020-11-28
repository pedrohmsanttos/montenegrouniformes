<?php
use Migrations\AbstractMigration;

class CreateContacts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('contacts');
        $table->addColumn('name', 'string', ['null' => true]);
        $table->addColumn('phone', 'string', ['null' => true]);
        $table->addColumn('email', 'string', ['null' => true]);
        $table->addColumn('company', 'string', ['null' => true]);
        $table->addColumn('subject', 'string', ['null' => true]);
        $table->addColumn('message', 'string', ['limit'=>1000]);
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime', ['default' => null]);
        $table->create();
    }
}
