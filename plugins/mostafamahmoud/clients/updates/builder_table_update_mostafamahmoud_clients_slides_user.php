<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudClientsSlidesUser extends Migration
{
    public function up()
    {
        Schema::rename('mostafamahmoud_clients_slides_clients', 'mostafamahmoud_clients_slides_user');
        Schema::table('mostafamahmoud_clients_slides_user', function($table)
        {
            $table->dropPrimary(['client_id','slide_id']);
            $table->renameColumn('client_id', 'user_id');
            $table->primary(['user_id','slide_id']);
        });
    }
    
    public function down()
    {
        Schema::rename('mostafamahmoud_clients_slides_user', 'mostafamahmoud_clients_slides_clients');
        Schema::table('mostafamahmoud_clients_slides_clients', function($table)
        {
            $table->dropPrimary(['user_id','slide_id']);
            $table->renameColumn('user_id', 'client_id');
            $table->primary(['client_id','slide_id']);
        });
    }
}
