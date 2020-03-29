<?php namespace MostafaMahmoud\Wedo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudWedoComponents extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_wedo_components_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('content');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_wedo_components_');
    }
}
