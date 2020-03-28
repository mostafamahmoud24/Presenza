<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudNavbarLinks4 extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_navbar_links', function($table)
        {
            $table->string('link');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_navbar_links', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
