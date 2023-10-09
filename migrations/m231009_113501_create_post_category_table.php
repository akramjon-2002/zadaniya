<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post_category}}`.
 */
class m231009_113501_create_post_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */

        public function up()
        {
            $this->createTable('post_category', [
                'post_id' => $this->integer(),
                'category_id' => $this->integer(),
                'PRIMARY KEY(post_id, category_id)',
            ]);

            // Создание индексов для внешних ключей
            $this->createIndex(
                'idx-post_category-post_id',
                'post_category',
                'post_id'
            );

            $this->createIndex(
                'idx-post_category-category_id',
                'post_category',
                'category_id'
            );

            // Создание внешних ключей
            $this->addForeignKey(
                'fk-post_category-post_id',
                'post_category',
                'post_id',
                'posts',
                'id',
                'CASCADE'
            );

            $this->addForeignKey(
                'fk-post_category-category_id',
                'post_category',
                'category_id',
                'categories',
                'id',
                'CASCADE'
            );
        }

        public function down()
    {
        $this->dropTable('post_category');
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post_category}}');
    }
}
