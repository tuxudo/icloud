<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class IcloudAddMojaveColumns extends Migration
{
    private $tableName = 'icloud';

    public function up()
    {
        $capsule = new Capsule();
        
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->boolean('home_enabled')->nullable();
            $table->boolean('news_enabled')->nullable();
            $table->boolean('stocks_enabled')->nullable();

            $table->index('home_enabled');
            $table->index('news_enabled');
            $table->index('stocks_enabled');
        });
    }

    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('home_enabled');
            $table->dropColumn('news_enabled');
            $table->dropColumn('stocks_enabled');
        });
    }
}
