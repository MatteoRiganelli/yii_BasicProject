<?php

use yii\db\Migration;

/**
 * Class m180917_144152_insertRegions
 */
class m180917_144152_insertRegions extends Migration
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
        $this->insert('regions',array('name'=>'Lombardia', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Lazio', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Campania', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Sicilia', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Veneto', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Emilia-Romagna', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Piemonte', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Puglia', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Toscana', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Calabria', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Sardegna', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Liguria', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Marche', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Abruzzo', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Friuli-Venezia Giulia', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Trentino-Alto Adige', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Umbria', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Molise', 'country_id'=> 1));
        $this->insert('regions',array('name'=>'Valle d\'Aosta', 'country_id'=> 1));
    }

    public function down()
    {
    }

}


