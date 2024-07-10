<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengobatan".
 *
 * @property int $id
 * @property int $patient_id
 * @property int|null $action_id
 * @property int|null $medication_id
 *
 * @property Tindakan $action
 * @property Obat $medication
 * @property Pasien $patient
 */
class Pengobatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengobatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id'], 'required'],
            [['patient_id', 'action_id', 'medication_id'], 'integer'],
            [['action_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tindakan::class, 'targetAttribute' => ['action_id' => 'id']],
            [['medication_id'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::class, 'targetAttribute' => ['medication_id' => 'id']],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['patient_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'action_id' => 'Action ID',
            'medication_id' => 'Medication ID',
        ];
    }

    /**
     * Gets query for [[Action]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAction()
    {
        return $this->hasOne(Tindakan::class, ['id' => 'action_id']);
    }

    /**
     * Gets query for [[Medication]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedication()
    {
        return $this->hasOne(Obat::class, ['id' => 'medication_id']);
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Pasien::class, ['id' => 'patient_id']);
    }
}
