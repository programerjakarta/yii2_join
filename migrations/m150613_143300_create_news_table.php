<?php

use yii\db\Schema;
use yii\db\Migration;

class m150613_143300_create_news_table extends Migration
{
    public function up()
    {

         $this->addColumn('guru', 'created_date', 'datetime');
    }

    public function down()
    {
        echo "m150613_143300_create_news_table cannot be reverted.\n";

        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
