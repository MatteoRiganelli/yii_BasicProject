<?php

use yii\db\Migration;

/**
 * Class m180917_143902_insertCountry
 */
class m180917_143902_insertCountry extends Migration
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
        $this->insert('country',array('code'=>'ITA', 'name'=>'Italy'));
    }

    public function down()
    {
    }

}
