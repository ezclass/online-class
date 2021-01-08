<?php

namespace Tests\Feature;

use App\Models\Program;
use App\Models\User;
use Tests\TestCase;

class CreateClassControllerTest extends TestCase
{
    public function test_create_class_can_teacher()
    {
        $user = User::factory()->create();
        $class = Program::factory()->make();

        $this->actingAs($user)->post('/create', [
            'name' => $class->name,
            'grade' => $class->grade,
            'image' => $class->image,
            'subject' => $class->subject,
            'medium' => $class->medium,
            'user_id' => $class->user_id,
        ])
            ->assertRedirect(route('dashboard'))
            ->assertSessionHas('success');

        $this->assertDatabaseHas('programs', [
            'name' => $class->name,
            'grade' => $class->grade,
            'image' => $class->image,
            'subject' => $class->subject,
            'medium' => $class->medium,
            'user_id' => $class->user_id,
        ]);
    }
}
