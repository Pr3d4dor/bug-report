<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExampleTwoTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_refreshes_the_databases(): void
    {
        $this->assertNull(DB::connection('sqlite')->table('persons')->first());
        $this->assertNull(DB::connection('sqlite_test')->table('persons')->first());
    }
}
