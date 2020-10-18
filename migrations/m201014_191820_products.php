<?php

use yii\db\Migration;

/**
 * Class m201014_191820_products
 */
class m201014_191820_products extends Migration
{
    const TABLE_PRODUCTS = 'products';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_PRODUCTS, [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'price' => $this->decimal()->defaultValue(0.0),
            'old_price' => $this->decimal()->defaultValue(0.0),
            'img' => $this->string()->defaultValue('no-image.png'),
            'description' => $this->string(255),
            'keywords' => $this->string(255),
            'is_offer' => $this->boolean()->defaultValue(false),
        ]);

        $this->addForeignKey(
            'fk-products-category_id',
            self::TABLE_PRODUCTS,
            'category_id',
            'categories',
            'id',
            'CASCADE'
        );
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_PRODUCTS);
    }
}
