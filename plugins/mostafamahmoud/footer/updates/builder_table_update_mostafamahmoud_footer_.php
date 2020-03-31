<?php namespace MostafaMahmoud\Footer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudFooter extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_footer_', function($table)
        {
            $table->renameColumn('instagream_link', 'youtube_link');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_footer_', function($table)
        {
            $table->renameColumn('youtube_link', 'instagream_link');
        });
    }
}
