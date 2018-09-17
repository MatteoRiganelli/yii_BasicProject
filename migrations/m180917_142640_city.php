<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180917_142640_city
 */
class m180917_142640_city extends Migration
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
        echo "m180917_142640_city cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'region_id' => Schema::TYPE_INTEGER,
        ]);
        $this->createIndex(
            'fk-city-id',
            'city',
            'region_id'
        );
        $this->addForeignKey('fk-city-id', 'city', 'region_id', 'regions', 'id');

    }

    public function down()
    {
        $this->dropTable('city');

    }

}
