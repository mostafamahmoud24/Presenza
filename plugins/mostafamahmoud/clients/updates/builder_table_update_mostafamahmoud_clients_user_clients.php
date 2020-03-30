<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudClientsUserClients extends Migration
{
    public function up()
    {
        Schema::rename('mostafamahmoud_clients_user_client', 'mostafamahmoud_clients_user_clients');
    }
    
    public function down()
    {
        Schema::rename('mostafamahmoud_clients_user_clients', 'mostafamahmoud_clients_user_client');
    }
}
