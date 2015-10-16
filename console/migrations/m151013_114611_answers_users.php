<?php

use yii\db\Migration;
use yii\db\Schema;

class m151013_114611_answers_users extends Migration
{
    public function safeUp()
    {
        $this->dropTable('{{%password_answers}}');
        $this->dropTable('{{%passwords}}');

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // Create a Many to Many Relationship between users (unique session/user) and their answers
        $this->createTable('{{%answers_users}}', [
            'answer' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->addForeignKey('fk_answers_users_answer', '{{%answers_users}}', 'answer', '{{%answers}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('{{%answers_users}}');

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // Create a passwords table for unique users
        $this->createTable('{{%passwords}}', [
            'id' => Schema::TYPE_PK,
            'password' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        // Create a Many to Many Relationship between password (unique session/user) and their answers
        $this->createTable('{{%password_answers}}', [
            'password' => Schema::TYPE_INTEGER,
            'answer' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->addForeignKey('fk_password_answers_password', '{{%password_answers}}', 'password', '{{%passwords}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_password_answers_answer', '{{%password_answers}}', 'answer', '{{%answers}}', 'id', 'CASCADE', 'CASCADE');
    }
}
