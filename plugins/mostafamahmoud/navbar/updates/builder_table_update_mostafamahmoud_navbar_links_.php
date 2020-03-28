<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudNavbarLinks extends Migration
{
    public function up()
    {
        Schema::rename('mostafamahmoud_navbar_links', 'mostafamahmoud_navbar_links_');
    }
    
    public function down()
    {
        Schema::rename('mostafamahmoud_navbar_links_', 'mostafamahmoud_navbar_links');
    }
}
