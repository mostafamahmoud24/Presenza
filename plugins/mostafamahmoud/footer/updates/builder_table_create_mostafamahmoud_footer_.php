<?php namespace MostafaMahmoud\Footer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudFooter extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_footer_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('instagream_link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_footer_');
    }
}
