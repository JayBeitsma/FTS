<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TicketsTableTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function tickets_table_has_expected_columns()
    {
        $this->assertTrue(
            \Schema::hasColumns('tickets', [
                'id', 'user_id', 'busride_id', 'price', 'created_at', 'updated_at'
            ]), 1
        );
    }

    /** @test */
    public function tickets_table_has_foreign_keys()
    {
        $foreignKeys = \DB::select(\DB::raw('SHOW KEYS FROM tickets WHERE Key_name = "user_id" OR Key_name = "busride_id"'));
        $this->assertCount(2, $foreignKeys);
    }
}
