<?php

use yii\db\Migration;

/**
 * Class m190107_141249_slider
 */
class m190107_141249_slider extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('slider', [
    'id' => $this->primaryKey(),
    'name' => $this->string()->notNull(),
    'slider' => $this->integer()->notNull(),
]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190107_141249_slider cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190107_141249_slider cannot be reverted.\n";

        return false;
    }
    */
}
