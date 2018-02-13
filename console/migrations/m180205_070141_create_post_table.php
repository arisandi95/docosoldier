<?php

use yii\db\Migration;

/**
 * Handles the creation of table `post`.
 */
class m180205_070141_create_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'body' => $this->text(),
        ]);

        $this->addForeignKey(
            'fk-post-author_id',
            'post',
            'author_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
         $this->dropForeignKey(
            'fk-post-author_id',
            'post'
        );
         
        $this->dropTable('post');
    }
}
