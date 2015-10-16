<?php

use yii\db\Migration;
use yii\db\Schema;

class m151014_133459_results extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%results_page}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->createTable('{{%results}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'text' => Schema::TYPE_TEXT,
            'results_page' => Schema::TYPE_INTEGER,
            'small_photo' => Schema::TYPE_STRING,
            'big_photo' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->addForeignKey('fk_results_results_page', '{{%results}}', 'results_page', '{{%results_page}}', 'id', 'CASCADE', 'CASCADE');

        $this->createTable('{{%result_from}}', [
            'id' => Schema::TYPE_PK,
            'part' => Schema::TYPE_INTEGER,
            'result' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->addForeignKey('fk_result_from_part', '{{%result_from}}', 'part', '{{%parts}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_result_from_result_page', '{{%result_from}}', 'result', '{{%results_page}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('{{%result_from}}');
        $this->dropTable('{{%results}}');
        $this->dropTable('{{%result_page}}');
    }
}
