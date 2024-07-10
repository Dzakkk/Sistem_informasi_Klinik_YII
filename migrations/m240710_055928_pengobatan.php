<?php

use yii\db\Migration;

/**
 * Class m240710_055928_pengobatan
 */
class m240710_055928_pengobatan extends Migration
{

    public function up()
    {
        $this->createTable('pengobatan', [
            'id' => $this->primaryKey(),
            'patient_id' => $this->integer()->notNull(),
            'action_id' => $this->integer(),
            'medication_id' => $this->integer(),
        ]);

        $this->addForeignKey('fk_pengobatan_patient', 'pengobatan', 'patient_id', 'pasien', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_pengobatan_action', 'pengobatan', 'action_id', 'tindakan', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_pengobatan_medication', 'pengobatan', 'medication_id', 'obat', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('pengobatan');
    }
}


