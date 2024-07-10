<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id
 * @property string $nama_pasien
 * @property string|null $umur
 * @property string|null $jenis_kelamin
 * @property string|null $alamat
 * @property string|null $diagnosis
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }
    
    public function getPengobatans()
    {
        return $this->hasMany(Pengobatan::class, ['patient_id' => 'id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien'], 'required'],
            [['jenis_kelamin', 'alamat', 'diagnosis'], 'string'],
            [['nama_pasien', 'umur'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pasien' => 'Nama Pasien',
            'umur' => 'Umur',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'diagnosis' => 'Diagnosis',
        ];
    }
}
