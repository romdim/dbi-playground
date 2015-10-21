<?php

use yii\db\Migration;
use yii\db\Schema;

class m151019_133436_steps extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%steps}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->addColumn('{{%parts}}', 'step', Schema::TYPE_INTEGER);

        $this->addForeignKey('fk_parts_steps', '{{%parts}}', 'step', '{{%steps}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropColumn('{{%parts}}', 'step');
        $this->dropTable('{{%steps}}');
    }
}
