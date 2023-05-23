<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat027}}`.
 */
class m230523_120014_create_obat027_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat027}}', [
            'id' => $this->primaryKey(),
            'kode_obat' => $this->varchar(12),
            'harga' => $this->integer(),
            'stok_obat' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat027}}');
    }
}
