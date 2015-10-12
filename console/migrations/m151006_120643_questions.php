<?php

use yii\db\Schema;
use yii\db\Migration;

class m151006_120643_questions extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // Create a parts table that divides the questions
        $this->createTable('{{%parts}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);
        $this->addForeignKey('fk_parts_user_created', '{{%parts}}', 'created_by', '{{%user}}', 'id', 'SET NULL', 'CASCADE');
        $this->addForeignKey('fk_parts_user_updated', '{{%parts}}', 'updated_by', '{{%user}}', 'id', 'SET NULL', 'CASCADE');

        // Create a questions table under a part
        $this->createTable('{{%questions}}', [
            'id' => Schema::TYPE_PK,
            'question' => Schema::TYPE_STRING . ' NOT NULL',
            'part' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);
        $this->addForeignKey('fk_questions_user_created', '{{%questions}}', 'created_by', '{{%user}}', 'id', 'SET NULL', 'CASCADE');
        $this->addForeignKey('fk_questions_user_updated', '{{%questions}}', 'updated_by', '{{%user}}', 'id', 'SET NULL', 'CASCADE');
        $this->addForeignKey('fk_questions_parts', '{{%questions}}', 'part', '{{%parts}}', 'id', 'SET NULL', 'CASCADE');

        // Create a answers table for the questions
        $this->createTable('{{%answers}}', [
            'id' => Schema::TYPE_PK,
            'answer' => Schema::TYPE_STRING . ' NOT NULL',
            'answer_num' => Schema::TYPE_INTEGER . ' NOT NULL',
            'question' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);
        $this->addForeignKey('fk_answers_user_created', '{{%answers}}', 'created_by', '{{%user}}', 'id', 'SET NULL', 'CASCADE');
        $this->addForeignKey('fk_answers_user_updated', '{{%answers}}', 'updated_by', '{{%user}}', 'id', 'SET NULL', 'CASCADE');
        $this->addForeignKey('fk_answers_questions', '{{%answers}}', 'question', '{{%questions}}', 'id', 'CASCADE', 'CASCADE');

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

    public function safeDown()
    {
        $this->dropTable('{{%password_answers}}');
        $this->dropTable('{{%passwords}}');
        $this->dropTable('{{%answers}}');
        $this->dropTable('{{%questions}}');
        $this->dropTable('{{%parts}}');
    }
}
