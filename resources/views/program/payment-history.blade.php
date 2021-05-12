<x-app-layout>

    <x-profile-heder />

    <div class="text-center mt-9">
        @role('teacher')
        <x-responsive-nav-link href="{{route('student.detail',$enrolment->program)}}" class="text-yellow-500">
            {{__('Go to Back')}}
        </x-responsive-nav-link>
        @endrole

        @role('student')
        <x-responsive-nav-link href="{{ route('student.dashboard')}}">
            {{__('Dashboard')}}
        </x-responsive-nav-link>
        @endrole
    </div>

    <div class="mt-8 grid lg:grid-cols-2 justify-items-center">
        <div class="text-md">
            <div>
                <strong class="mr-10">Class : {{$enrolment->program->subject->name}}</strong>
            </div>
            <div class="mt-2">
                Class Fee: Rs.{{$enrolment->program->fees}}
            </div>
        </div>
        <div class="mt-4 lg:mt-0 text-md">
            <div class="mr-10">
                Student Name: {{$student->name}}
            </div>
            <div class="mt-2">
                Teacher Name: {{$enrolment->program->teacher->name}}
            </div>
        </div>
    </div>

    <x-payment-history :payments="$payments" />

</x-app-layout>
