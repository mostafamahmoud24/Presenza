<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudNavbar2 extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_navbar_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_navbar_');
    }
}
