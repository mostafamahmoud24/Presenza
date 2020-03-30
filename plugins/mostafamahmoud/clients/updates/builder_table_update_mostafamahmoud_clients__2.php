<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudClients2 extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_clients_', function($table)
        {
            $table->text('subtitle');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_clients_', function($table)
        {
            $table->dropColumn('subtitle');
        });
    }
}
