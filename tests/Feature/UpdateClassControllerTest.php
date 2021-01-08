<?php

namespace Tests\Feature;

use App\Models\Program;
use App\Models\User;
use Tests\TestCase;

class UpdateClassControllerTest extends TestCase
{
    public function testExample()
    {
        $user = User::factory()->create();
        $class = Program::factory()->make();
        $newNane = "shashika";

        $this->actingAs($user)->post('/update', [
            'name' => $newNane,
            'grade' => $class->grade,
            'subject' => $class->subject,
            'medium' => $class->medium,
            'user_id' => $class->user_id,
        ])
            ->assertRedirect(route('dashboard'))
            ->assertSessionHas('success');

        $this->assertDatabaseHas('programs', [
            'name' => $newNane,
            'grade' => $class->grade,
            'subject' => $class->subject,
            'medium' => $class->medium,
            'user_id' => $class->user_id,
        ]);
    }
}
