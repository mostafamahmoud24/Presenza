<?php namespace MostafaMahmoud\Wedo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudWedo2 extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_wedo_', function($table)
        {
            $table->string('link');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_wedo_', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
