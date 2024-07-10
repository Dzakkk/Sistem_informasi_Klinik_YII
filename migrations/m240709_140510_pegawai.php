<?php

use yii\db\Migration;

/**
 * Class m240709_140510_pegawai
 */
class m240709_140510_pegawai extends Migration
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
    //     echo "m240709_140510_pegawai cannot be reverted.\n";

    //     return false;
    // }

 
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('pegawai', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'jabatan' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('pegawai');
    }
 
}
