<?php namespace MostafaMahmoud\AboutUs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudAboutus extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_aboutus_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('instagram_link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_aboutus_');
    }
}
