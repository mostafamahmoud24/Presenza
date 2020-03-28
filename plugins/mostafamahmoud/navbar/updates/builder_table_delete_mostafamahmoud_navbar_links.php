<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMostafamahmoudNavbarLinks extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mostafamahmoud_navbar_links');
    }
    
    public function down()
    {
        Schema::create('mostafamahmoud_navbar_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->string('link', 191);
        });
    }
}
