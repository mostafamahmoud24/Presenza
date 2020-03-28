<?php namespace MostafaMahmoud\Navbar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudNavbarNavabrLinks extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_navbar_navabr_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('link_id');
            $table->integer('navbar_id');
            $table->primary(['link_id','navbar_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_navbar_navabr_links');
    }
}
