<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m231009_064232_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'object_id' => $this->integer(),
            'type' => $this->string(255)->notNull(),
            'organization_name' => $this->string(255),
            'adress' => $this->string(255),
            'boxs' => $this->text()->notNull(),
            'area_all' => $this->double()->notNull(),
            'unit' => $this->string(50)->notNull()->defaultValue('m2'),
            'method_id' => $this->integer()->notNull(),
            'type_id' => $this->integer()->notNull(),
            'medicine_name' => $this->string(255)->notNull(),
            'dosage' => $this->string(50)->notNull(),
            'time' => $this->integer(),
            'date_event' => $this->integer()->notNull(),
            'report_date' => $this->integer()->notNull(),
            'create_user_id' => $this->integer()->notNull(),
            'start_processing' => $this->string(255),
            'end_processing' => $this->string(255),
            'exposition_time' => $this->time(),

//            '' => $this->,
//            'id' => $this->primaryKey(),
//            'title' => $this->string()->notNull(),
//            'content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
