<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile_027".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $foto_profile
 */
class Profile027 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile_027';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_mahasiswa', 'foto_profile'], 'required'],
            [['id', 'id_mahasiswa'], 'integer'],
            [['foto_profile'], 'string', 'max' => 10],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profile' => 'Foto Profile',
        ];
    }
}
