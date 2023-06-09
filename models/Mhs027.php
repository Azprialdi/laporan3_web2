<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mhs027".
 *
 * @property int $id
 * @property string $no_induk_mahasiswa
 * @property string $nama_mahasiswa
 * @property string $kelas
 * @property string $status
 */
class Mhs027 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mhs027';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'required'],
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_induk_mahasiswa' => 'No Induk Mahasiswa',
            'nama_mahasiswa' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'status' => 'Status',
        ];
    }
}
