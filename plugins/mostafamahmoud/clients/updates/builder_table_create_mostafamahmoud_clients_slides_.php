<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudClientsSlides extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_clients_slides_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('testimony');
            $table->string('author');
            $table->string('coname');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_clients_slides_');
    }
}
