<?php

use yii\db\Migration;

/**
 * Class m210420_083825_test_migration
 */
class m210420_083825_test_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210420_083825_test_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210420_083825_test_migration cannot be reverted.\n";

        return false;
    }
    */
}
