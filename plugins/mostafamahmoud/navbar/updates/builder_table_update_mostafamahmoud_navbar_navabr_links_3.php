<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudNavbarNavabrLinks3 extends Migration
{
    public function up()
    {
        Schema::rename('mostafamahmoud_navbar_navabr_links_', 'mostafamahmoud_navbar_navabr_links');
    }
    
    public function down()
    {
        Schema::rename('mostafamahmoud_navbar_navabr_links', 'mostafamahmoud_navbar_navabr_links_');
    }
}
