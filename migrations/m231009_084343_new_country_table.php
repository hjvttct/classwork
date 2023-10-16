<?php

use yii\db\Migration;

/**
 * Class m231009_084343_new_country_table
 */
class m231009_084343_new_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'code' => $this->char(2),
            'name' => $this->char(52)->notNull(),
            'population' => $this->integer(11)->defaultValue(0),
        ]);
        $this->addPrimaryKey('PK_code', 'country', 'code');
        $this->insert('country', [
            'code' => 'AU',
            'name' => 'Australia',
            'population' => 24_016_400,
        ]);
        $this->insert('country', [
            'code' => 'BR',
            'name' => 'Brazil',
            'population' => 205722000,
        ]);
        $this->insert('country', [
            'code' => 'CA',
            'name' => 'Canada',
            'population' => 35985751,
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('country');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231009_084343_new_country_table cannot be reverted.\n";

        return false;
    }
    */
}
