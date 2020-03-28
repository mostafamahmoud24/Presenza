<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMostafamahmoudNavbarNavbarLinks extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mostafamahmoud_navbar_navbar_links');
    }
    
    public function down()
    {
        Schema::create('mostafamahmoud_navbar_navbar_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('links_id');
            $table->integer('navbar_id');
            $table->primary(['links_id','navbar_id']);
        });
    }
}
