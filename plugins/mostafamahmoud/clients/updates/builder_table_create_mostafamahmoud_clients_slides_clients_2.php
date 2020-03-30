<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudClientsSlidesClients2 extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_clients_slides_clients', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('client_id');
            $table->integer('slide_id');
            $table->primary(['client_id','slide_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_clients_slides_clients');
    }
}
