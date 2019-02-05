<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m190203_095208_category
 */
class m190203_095208_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'categoryname' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190203_095208_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190203_095208_category cannot be reverted.\n";

        return false;
    }
    */
}
