<?php

use yii\db\Migration;

/**
 * Class m240709_140155_wilayah
 */
class m240709_140155_wilayah extends Migration
{
    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeUp()
    // {

    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeDown()
    // {
    //     echo "m240709_140155_wilayah cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('wilayah', [
            'id' => $this->primaryKey(),
            'wilayah' => $this->string()->notNull(),
            'klinik' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('wilayah');
    }
    
}
