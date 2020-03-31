<?php namespace MostafaMahmoud\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudContact extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_contact_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('link');
            $table->text('subtitle');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_contact_');
    }
}
