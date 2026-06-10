<?php
use SLiMS\Migration\Migration;
use SLiMS\Table\Schema;
use SLiMS\Table\Blueprint;

class CreateItemConditions extends Migration
{
    function up()
    {
        Schema::create('item_conditions', function(Blueprint $table) {
            $table->autoIncrement('id');
            $table->tinynumber('physical_condition')->default(1);
            $table->text('physical_condition_info');
            $table->timestamps();
            $table->engine = 'MyISAM';
        });

    }

    function down()
    {
         Schema::drop('item_conditions');
    }
}