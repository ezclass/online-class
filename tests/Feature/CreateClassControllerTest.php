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
            'status' => $class->status,
            'grade_id' => $class->grade_id,
            'image' => $class->image,
            'fees' =>$class->fees,
            'class_type' =>$class->class_type,
            'start_date' =>$class->start_date,
            'end_date' =>$class->end_date,
            'start_time' =>$class->start_time,
            'end_time' =>$class->end_time,
            'day' =>$class->day,
            'user_id' => $class->user_id,
            'subject_id' => $class->subject_id,
            'language_id' =>$class->language_id,
        ])
            ->assertRedirect(route('program.view.teacher'))
            ->assertSessionHas('success', 'Class created successful');

        $this->assertDatabaseHas('programs', [
            'status' => $class->status,
            'grade_id' => $class->grade_id,
            'image' => $class->image,
            'subject' => $class->subject,
            'medium' => $class->medium,
            'user_id' => $class->user_id,
        ]);
    }
}
