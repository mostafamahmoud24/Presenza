<?php namespace MostafaMahmoud\Wedo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudWedo extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_wedo_', function($table)
        {
            $table->renameColumn('content', 'subtitle');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_wedo_', function($table)
        {
            $table->renameColumn('subtitle', 'content');
        });
    }
}
