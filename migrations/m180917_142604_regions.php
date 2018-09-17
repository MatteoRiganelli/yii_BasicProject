<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180917_142604_regions
 */
class m180917_142604_regions extends Migration
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
        echo "m180917_142604_regions cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('regions', [
            'id' => $this->primaryKey(),
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'country_id' => Schema::TYPE_INTEGER,
        ]);
        $this->createIndex(
            'fk-regions-id',
            'regions',
            'country_id'
        );
        $this->addForeignKey('fk-regions-id', 'regions', 'country_id', 'country', 'id');

    }

    public function down()
    {
        $this->dropTable('regions');

    }

}
