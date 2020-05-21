<?php

use yii\db\Migration;

class m160815_100911_initial extends Migration
{

    public function up()
    {
        $this->createTable('mentionedusers_share', array(
            'id' => 'pk',
            'content_id' => 'int(11) NOT NULL',
        ), '');

        $this->addForeignKey('fkey_content_id', 'mentionedusers_share', 'content_id', 'content', 'id');
    }

    public function down()
    {
        echo "m160815_100911_initial cannot be reverted.\n";

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
