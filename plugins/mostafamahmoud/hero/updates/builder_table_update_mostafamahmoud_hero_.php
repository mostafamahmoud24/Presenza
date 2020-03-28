<?php namespace MostafaMahmoud\Hero\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudHero extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_hero_', function($table)
        {
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_hero_', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
