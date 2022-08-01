<?php
namespace LaraPackage\Tests\Migration;

use LaraPackage\Tests\TestCase;

//use Orchestra\Testbench\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Support\Facades\DB;
use LaraPackage\Database\Migration;
use LaraPackage\Schema\DatabaseSchema;

class MigrationTest extends TestCase {

    //use RefreshDatabase;

    public function setup(): void {
        parent::setUp();
    }

    /** @test */
    public function test_create_table_migration() {

        $schema=new DatabaseSchema();
        $table = $schema->tables_schema();
        $tableName = $table;//'accounts';

        $migration = new Migration();
        $migration->createTable( $tableName );

        //get database columns
        $columns = DB::getSchemaBuilder()->getColumnListing( $tableName );

        $this->assertContains("accountID", $columns);
        $this->assertContains("emailAddress", $columns);
        
    }
}