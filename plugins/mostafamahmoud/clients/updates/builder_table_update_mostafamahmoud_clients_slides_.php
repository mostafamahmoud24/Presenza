<?php namespace MostafaMahmoud\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMostafamahmoudClientsSlides extends Migration
{
    public function up()
    {
        Schema::table('mostafamahmoud_clients_slides_', function($table)
        {
            $table->string('author_title');
        });
    }
    
    public function down()
    {
        Schema::table('mostafamahmoud_clients_slides_', function($table)
        {
            $table->dropColumn('author_title');
        });
    }
}
