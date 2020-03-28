<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudNavbarNavabrLinks2 extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_navbar_navabr_links', function($table)
        {
            $table->dropPrimary(['link_id','navbar_id']);
            $table->integer('links_id')->unsigned();
            $table->integer('navbar_id')->unsigned()->change();
            $table->dropColumn('link_id');
            $table->primary(['links_id','navbar_id']);
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_navbar_navabr_links', function($table)
        {
            $table->dropPrimary(['links_id','navbar_id']);
            $table->dropColumn('links_id');
            $table->integer('navbar_id')->unsigned(false)->change();
            $table->integer('link_id');
            $table->primary(['link_id','navbar_id']);
        });
    }
}
