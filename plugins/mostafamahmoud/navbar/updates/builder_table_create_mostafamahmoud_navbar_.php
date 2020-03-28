<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudNavbar extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_navbar_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_navbar_');
    }
}
