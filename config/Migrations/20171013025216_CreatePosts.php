
<?php
use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
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
        $table = $this->table('posts');
        $table->addColumn('title', 'string', ['limit'=>500]);
        $table->addColumn('content', 'string', ['limit'=>10000]);
        $table->addColumn('url', 'string', ['limit'=>500]);
        $table->addColumn('photo', 'string', ['null' => true]);
        $table->addColumn('photo_dir', 'string',['null' => true]);
        $table->addColumn('photo_size', 'integer',['null' => true]);
        $table->addColumn('photo_type', 'integer',['null' => true]);
        $table->addColumn('created_by', 'integer');
        $table->addColumn('category_id', 'integer');
        $table->addIndex(['created_by', 'category_id']);
        $table->addForeignKey('created_by', 'users', 'id');  
        $table->addForeignKey('category_id', 'categories', 'id');  
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime', ['default' => null]);
        $table->create();
    }
}
