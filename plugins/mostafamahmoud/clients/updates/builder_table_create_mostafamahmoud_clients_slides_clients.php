<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudClientsSlidesClients extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_clients_slides_clients', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('slide_id');
            $table->integer('client_id');
            $table->primary(['slide_id','client_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_clients_slides_clients');
    }
}
