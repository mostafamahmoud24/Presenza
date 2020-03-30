<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMostafamahmoudClientsUser extends Migration
{
    public function up()
    {
        Schema::create('mostafamahmoud_clients_user', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mostafamahmoud_clients_user');
    }
}
