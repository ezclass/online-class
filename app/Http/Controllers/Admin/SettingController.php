<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubjectSettingRequest;
use App\Http\Requests\Admin\SuperAdminRequest;
use App\Models\Grade;
use App\Models\Subject;

class SettingController extends Controller
{
    public function view(SuperAdminRequest $request)
    {
        return view('admin.setting')
            ->with([
                'subjects' => Subject::query()
                    ->get(),
                'grades' => Grade::query()
                    ->get(),
            ]);
    }

    public function save(SubjectSettingRequest $request)
    {
        $subjects = [
            ['name' => ['si' => $request->si,  'en' => $request->en]],
        ];
        collect($subjects)
            ->each(function ($subject) {
                $newSubject = new Subject();
                $newSubject->name = $subject['name'];
                $newSubject->save();
            });

        return redirect()
            ->back()
            ->with('success', 'Subject saving is successful');
    }

    public function update(SuperAdminRequest $request, Subject $subject)
    {
        $subject->setTranslation('name', 'en', $request->get('subject'));
        $subject->save();

        return redirect()
            ->back()
            ->with('success', 'Subject update successful');
    }
}
