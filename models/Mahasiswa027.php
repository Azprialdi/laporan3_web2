<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_027".
 *
 * @property int $id
 * @property int $nim
 * @property int $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa027 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_027';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['id', 'nim', 'nama'], 'integer'],
            [['kelas'], 'string', 'max' => 2],
            [['jurusan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    public function getProfile027()
    {
        
        return $this->hasOne(Profile027::class, ['id_mahasiswa' => 'id']);
    }
}