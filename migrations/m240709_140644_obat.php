<?php

use yii\db\Migration;

/**
 * Class m240709_140644_obat
 */
class m240709_140644_obat extends Migration
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
    //     echo "m240709_140644_obat cannot be reverted.\n";

    //     return false;
    // }

   
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('obat', [
            'id' => $this->primaryKey(),
            'nama_obat' => $this->string()->notNull(),
            'jenis' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('obat');
    }
    
}
