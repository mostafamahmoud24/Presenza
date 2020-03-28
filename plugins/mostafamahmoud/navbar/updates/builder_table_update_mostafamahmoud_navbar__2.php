<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudNavbar2 extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_navbar_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_navbar_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
