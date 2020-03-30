<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudClients extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_clients_', function($table)
        {
            $table->string('link');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_clients_', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
