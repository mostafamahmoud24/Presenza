<?php namespace MostafaMahmoud\Wedo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudWedoComponentWedo extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_wedo_component_wedo_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('wedo_id');
            $table->integer('component_id');
            $table->primary(['wedo_id','component_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_wedo_component_wedo_');
    }
}
