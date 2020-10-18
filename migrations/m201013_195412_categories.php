<?php

use yii\db\Migration;

/**
 * Class m201013_195412_categories
 */
class m201013_195412_categories extends Migration
{
    const TABLE_CATEGORIES = 'categories';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_CATEGORIES, [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->unsigned()->defaultValue(0),
            'title' => $this->string()->notNull(),
            'description' => $this->string(255),
            'keywords' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_CATEGORIES);
    }
}
