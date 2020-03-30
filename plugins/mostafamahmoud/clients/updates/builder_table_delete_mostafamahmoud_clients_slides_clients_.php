<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMostafamahmoudClientsSlidesClients extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mostafamahmoud_clients_slides_clients_');
    }
    
    public function down()
    {
        Schema::create('mostafamahmoud_clients_slides_clients_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('slide_id');
            $table->integer('client_id');
        });
    }
}
