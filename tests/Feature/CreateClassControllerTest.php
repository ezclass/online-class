<?php

namespace Tests\Feature;

use App\Models\Program;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateClassControllerTest extends TestCase
{
    public function test_create_class_can_teacher()
    {
        $user = User::factory()->create();
        $class = Program::factory()->create();

        $response = $this->actingAs($user)->post('/teacher', [
            'name' => $class->name,
            'grade' => $class->grade,
            'image' => $class->image,
            'teacher_id' => $class->teacher_id,
            'subject_id ' => $class->subject_id,
            'medium_id ' => $class->medium_id,
        ]);

        $response->assertStatus(201);

        $response = $this->assertDatabaseHas('programs', [
            'name' => $class->name,
            'grade' => $class->grade,
            'image' => $class->image,
            'teacher_id' => $class->teacher_id,
            'subject_id ' => $class->subject_id,
            'medium_id ' => $class->medium_id,
        ]);
    }
}
