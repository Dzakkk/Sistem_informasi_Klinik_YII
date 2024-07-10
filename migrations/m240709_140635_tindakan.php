<?php

use yii\db\Migration;

/**
 * Class m240709_140635_tindakan
 */
class m240709_140635_tindakan extends Migration
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
    //     echo "m240709_140635_tindakan cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('tindakan', [
            'id' => $this->primaryKey(),
            'tindakan' => $this->string()->notNull(),
            'biaya' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('tindakan');
    }
   
}
