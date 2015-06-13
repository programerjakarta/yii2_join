<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property integer $id_kelas
 * @property string $nama_kelas
 *
 * @property Guru[] $gurus
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kelas'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kelas' => 'ID KELAS',
            'nama_kelas' => 'NAMA KELAS',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuru()
    {
        return $this->hasMany(Guru::className(), ['id_kelas' => 'id_kelas']);
    }
}
