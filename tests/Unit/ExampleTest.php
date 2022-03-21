<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    public function a_user_can_create_a_project(){
        $attributes = [
          'title' => $this->faker->sentence,
          'description' => $this->faker->paragraph
        ];
        $this->post('/projects', $attributes);

        $this->assertDatabaseHas('projects', $attributes);
    }

}
