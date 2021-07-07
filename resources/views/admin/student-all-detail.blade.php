<x-admin>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <div class="items-center">
        <div class='shadow rounded-md bg-blue-100 w-full max-w-lg'>
            <div class='flex items-center px-5 py-3'>
                <img src="{{ Storage::disk('do')->url('avatar/' . $student->avatar) }}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                <div class='mx-3'>
                    <a href="{{ route('public.dashboard', $student) }}" class="text-gray-600 text-xl">{{ $student->name }}</a>
                    <p>{{ $student->email }}</p>
                    <p>{{ $student->phone_number }}</p>
                </div>
            </div>
            <hr />
        </div>
    </div>

    <x-student-enroll-program :enrolments="$enrolments" />

</x-admin>
