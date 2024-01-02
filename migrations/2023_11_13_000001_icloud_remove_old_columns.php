<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class IcloudRemoveOldColumns extends Migration
{
    private $tableName = 'icloud';

    public function up()
    {
        $capsule = new Capsule();
        
        // These have to be split out because of SQLite limtations
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            // These services are no longer supported by Apple
            $table->dropColumn('back_to_my_mac_enabled');
        });
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('back_to_my_mac_relay_port');
        });
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('photo_stream_enabled');
        });
    }

    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->boolean('back_to_my_mac_enabled')->nullable();
            $table->integer('back_to_my_mac_relay_port')->nullable();
            $table->boolean('photo_stream_enabled')->nullable();

            $table->index('back_to_my_mac_enabled');
            $table->index('back_to_my_mac_relay_port');
            $table->index('photo_stream_enabled');
        });
    }
}
