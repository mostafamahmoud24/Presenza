<?php namespace MostafaMahmoud\AboutUs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudAboutus2 extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_aboutus_', function($table)
        {
            $table->text('description')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_aboutus_', function($table)
        {
            $table->string('description', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
