<?php namespace MostafaMahmoud\Wedo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudWedo extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_wedo_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_wedo_');
    }
}
