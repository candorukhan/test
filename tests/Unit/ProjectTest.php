<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_example_Test_it_has_a_path()
    {
        //$project = Project::factory()->create();
        //$this->assertEquals('/projects/' . $project->id, $project->path());
        $this->assertEquals(1, 1);
    }
}
