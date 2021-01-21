<?php

use yii\db\Migration;

/**
 * Class m190105_104059_jui
 */
class m190105_104059_jui extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('jui', [
    'id' => $this->primaryKey(),
    'title' => $this->string()->notNull(),
    'data' => $this->string()->notNull(),
]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190105_104059_jui cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190105_104059_jui cannot be reverted.\n";

        return false;
    }
    */
}
