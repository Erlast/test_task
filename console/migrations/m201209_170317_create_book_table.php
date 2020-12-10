<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m201209_170317_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'year' => $this->integer(5),
            'pages' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
