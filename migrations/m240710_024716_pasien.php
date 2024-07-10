<?php

use yii\db\Migration;

/**
 * Class m240710_024716_pasien
 */
class m240710_024716_pasien extends Migration
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
    //     echo "m240710_024716_pasien cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('pasien', [
            'id' => $this->primaryKey(),
            'nama_pasien' => $this->string()->notNull(),
            'umur' => $this->string(),
            'jenis_kelamin' => "enum('Laki laki', 'perempuan')",
            'alamat' => $this->text(),
            'diagnosis' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('pasien');
    }

}
