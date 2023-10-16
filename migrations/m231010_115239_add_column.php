<?php

use yii\db\Migration;

/**
 * Class m231010_115239_add_column
 */
class m231010_115239_add_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('user','status',$this->boolean()->defaultValue('0'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231010_115239_add_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231010_115239_add_column cannot be reverted.\n";

        return false;
    }
    */
}
