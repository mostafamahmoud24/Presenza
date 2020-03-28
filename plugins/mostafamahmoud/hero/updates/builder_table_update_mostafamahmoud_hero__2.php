<?php namespace MostafaMahmoud\Hero\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudHero2 extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_hero_', function($table)
        {
            $table->string('link');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_hero_', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
