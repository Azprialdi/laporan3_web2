<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mhs027}}`.
 */
class m230530_095646_create_mhs027_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs027}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this -> string()->notNull(),
            'nama_mahasiswa' => $this -> string()->notNull(),
            'kelas' => $this -> string()->notNull(),
            'status' => $this -> string()->notNull(),
         ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs027}}');
    }
}
