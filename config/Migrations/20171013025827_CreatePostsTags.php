<?php
use Migrations\AbstractMigration;

class CreatePostsTags extends AbstractMigration
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
        $table = $this->table('posts_tags');
        $table->addColumn('post_id', 'integer')
              ->addColumn('tag_id', 'integer')
              ->addIndex(['post_id', 'tag_id']) 
              ->addForeignKey('post_id', 'posts', 'id')  
              ->addForeignKey('tag_id', 'tags', 'id')
              ->create();  
    }
}
