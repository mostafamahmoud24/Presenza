<?php namespace MostafaMahmoud\AboutUs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudAboutus3 extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_aboutus_', function($table)
        {
            $table->string('link');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_aboutus_', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
