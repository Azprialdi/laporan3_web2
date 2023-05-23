<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mata_kuliah".
 *
 * @property int $id
 * @property string $namamk
 * @property int $kodemk
 */
class MataKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mata_kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namamk', 'kodemk'], 'required'],
            [['kodemk'], 'integer'],
            [['namamk'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namamk' => 'Namamk',
            'kodemk' => 'Kodemk',
        ];
    }
}
