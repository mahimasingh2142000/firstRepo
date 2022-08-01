<?php

namespace LaraPackage\Database;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Migration {

    private function makeTableMigration($tableName) {
        if( !Schema::hasTable($tableName)  ){
            Schema::create($tableName, function (Blueprint $table) {
                $table->id( "accountID" );
                $table->string('name');
                $table->string('emailAddress');
                $table->timestamps();
            });
        }
    }

    public function createTable( $tableName = "" ) {
        $this->makeTableMigration($tableName);
    }

}