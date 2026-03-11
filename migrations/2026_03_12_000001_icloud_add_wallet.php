<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class IcloudAddWallet extends Migration
{
    private $tableName = 'icloud';

    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->boolean('wallet_enabled')->nullable();
            $table->boolean('phonefacetime_enabled')->nullable();
            $table->boolean('freeform_enabled')->nullable();
            
            // Create indexes
            $table->index('wallet_enabled');
            $table->index('phonefacetime_enabled');
            $table->index('freeform_enabled');
        });
    }

    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('wallet_enabled');
            $table->dropColumn('phonefacetime_enabled');
            $table->dropColumn('freeform_enabled');
        });
    }
}
