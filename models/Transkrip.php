<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transkrip".
 *
 * @property int $id
 * @property int $kode_transkrip
 * @property int $id_mahasiswa
 * @property string $ipk
 * @property int $tahun_lulus
 */
class Transkrip extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transkrip';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode_transkrip', 'id_mahasiswa', 'ipk', 'tahun_lulus'], 'required'],
            [['id', 'kode_transkrip', 'id_mahasiswa', 'tahun_lulus'], 'integer'],
            [['ipk'], 'string', 'max' => 4],
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
            'kode_transkrip' => 'Kode Transkrip',
            'id_mahasiswa' => 'Id Mahasiswa',
            'ipk' => 'Ipk',
            'tahun_lulus' => 'Tahun Lulus',
        ];
    }
}
