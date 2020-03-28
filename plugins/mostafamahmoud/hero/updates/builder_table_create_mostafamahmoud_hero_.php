<?php namespace MostafaMahmoud\Hero\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudHero extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_hero_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_hero_');
    }
}
