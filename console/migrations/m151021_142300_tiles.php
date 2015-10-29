<?php

use yii\db\Migration;
use yii\db\Schema;

class m151021_142300_tiles extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%levels}}', [
            'id' => Schema::TYPE_PK,
            'level' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_STRING,
            'score' => Schema::TYPE_INTEGER,
            'color' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->createTable('{{%tiles_categories}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'color' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->createTable('{{%tiles}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'text' => Schema::TYPE_TEXT,
            'x' => Schema::TYPE_INTEGER,
            'y' => Schema::TYPE_INTEGER,
            'category' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->addForeignKey('fk_tiles_tiles_categories', '{{%tiles}}', 'category', '{{%tiles_categories}}', 'id', 'CASCADE', 'CASCADE');

        // Create a Many to Many Relationship between users (unique session/user) and their tiles
        $this->createTable('{{%tiles_users}}', [
            'id' => Schema::TYPE_PK,
            'tile' => Schema::TYPE_INTEGER,
            'level' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->addForeignKey('fk_tiles_users_tiles', '{{%tiles_users}}', 'tile', '{{%tiles}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_tiles_users_levels', '{{%tiles_users}}', 'level', '{{%levels}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('{{%tiles_users}}');
        $this->dropTable('{{%tiles}}');
        $this->dropTable('{{%tiles_categories}}');
        $this->dropTable('{{%levels}}');
    }
}
