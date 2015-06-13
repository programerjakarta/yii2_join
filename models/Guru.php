<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property integer $id_guru
 * @property integer $id_kelas
 * @property string $nama
 * @property string $alamat
 * @property string $created_date
 *
 * @property Kelas $idKelas
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kelas'], 'required'],
            [['id_kelas'], 'integer'],
            [['created_date'], 'safe'],
            [['nama', 'alamat'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_guru' => 'Id Guru',
            'id_kelas' => 'Id Kelas',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'created_date' => 'Created Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKelas()
    {
        return $this->hasOne(Kelas::className(), ['id_kelas' => 'id_kelas']);
    }
}
