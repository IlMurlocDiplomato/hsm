<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mailinglist}}`.
 */
class m220827_201820_create_mailinglist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mailinglist}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(120)->notNull(),
            'status' => $this->integer(2)->notNull(),
            'created_at' => $this->integer(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mailinglist}}');
    }
}
