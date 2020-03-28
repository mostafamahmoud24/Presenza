<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudNavbarNavabrLinks extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_navbar_navabr_links', function($table)
        {
            $table->dropPrimary(['links_id','navbar_id']);
            $table->renameColumn('links_id', 'link_id');
            $table->primary(['link_id','navbar_id']);
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_navbar_navabr_links', function($table)
        {
            $table->dropPrimary(['link_id','navbar_id']);
            $table->renameColumn('link_id', 'links_id');
            $table->primary(['links_id','navbar_id']);
        });
    }
}
