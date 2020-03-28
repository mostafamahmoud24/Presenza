<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMostafamahmoudNavbar2 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mostafamahmoud_navbar_');
    }
    
    public function down()
    {
        Schema::create('mostafamahmoud_navbar_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->string('slug', 191);
        });
    }
}
