<?php
use Migrations\AbstractMigration;
use Cake\ORM\TableRegistry;

class CreateUsers extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('name', 'string', ['null' => true]);
        $table->addColumn('username', 'string', ['null' => true]);
        $table->addColumn('password', 'string', ['null' => true]);
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime', ['null' => true]);
        $table->create();


        $data = [ 
                    [
                        'name' => 'Pedro Santos', 
                        'username' => 'phmsanttos@gmail.com',
                        'password' => '101010',
                        'modified' => false
                    ],
                ];

        $adminTable = TableRegistry::get('Users');
        foreach ($data as $value) {
          $adminTable->save($adminTable->newEntity($value));
        }
    }
}
