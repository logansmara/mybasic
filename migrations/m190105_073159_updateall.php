<?php

use yii\db\Migration;

/**
 * Class m190105_073159_updateall
 */
class m190105_073159_updateall extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('updateall', [
    'id' => $this->primaryKey(),
    'title' => $this->string()->notNull(),
    'status' => $this->integer(),
]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190105_073159_updateall cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190105_073159_updateall cannot be reverted.\n";

        return false;
    }
    */
}
