<?php

use yii\db\Migration;

/**
 * Class m240710_035206_user
 */
class m240710_035206_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
{
    $this->createTable('{{%user}}', [
        'id' => $this->primaryKey(),
        'username' => $this->string()->notNull()->unique(),
        'password_hash' => $this->string()->notNull(),
        'auth_key' => $this->string(32)->notNull(),
        'role' => $this->string()->notNull(), // add role field
        'created_at' => $this->integer()->notNull(),
        'updated_at' => $this->integer()->notNull(),
    ]);
}

public function safeDown()
{
    $this->dropTable('{{%user}}');
}


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240710_035206_user cannot be reverted.\n";

        return false;
    }
    */
}
