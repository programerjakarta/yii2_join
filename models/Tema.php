<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tema".
 *
 * @property integer $idtema
 * @property string $temacol
 */
class Tema extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tema';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['temacol'], 'required'],
            [['temacol'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtema' => 'Idtema',
            'temacol' => 'Temacol',
        ];
    }
}
