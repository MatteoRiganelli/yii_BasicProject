<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180917_124424_country
 */
class m180917_124424_country extends Migration
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

    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('country', [
            'id' => $this->primaryKey(),
            'code' => $this->char(3),
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ]);


    }

    public function down()
    {
        $this->dropTable('country');

    }

}
