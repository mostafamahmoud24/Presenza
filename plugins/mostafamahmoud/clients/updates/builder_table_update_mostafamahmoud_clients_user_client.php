<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudClientsUserClient extends Migration
{
    public function up()
    {
        Schema::rename('mostafamahmoud_clients_slides_clients', 'mostafamahmoud_clients_user_client');
        Schema::table('mostafamahmoud_clients_user_client', function($table)
        {
            $table->dropPrimary(['slide_id','client_id']);
            $table->renameColumn('slide_id', 'user_id');
            $table->primary(['user_id','client_id']);
        });
    }
    
    public function down()
    {
        Schema::rename('mostafamahmoud_clients_user_client', 'mostafamahmoud_clients_slides_clients');
        Schema::table('mostafamahmoud_clients_slides_clients', function($table)
        {
            $table->dropPrimary(['user_id','client_id']);
            $table->renameColumn('user_id', 'slide_id');
            $table->primary(['slide_id','client_id']);
        });
    }
}
