<x-app-layout>

    <style>
        /* Tab content - closed */
        .tab-content {
            max-height: 0;
            -webkit-transition: max-height .35s;
            -o-transition: max-height .35s;
            transition: max-height .35s;
        }

        /* :checked - resize to full height */
        .tab input:checked~.tab-content {
            max-height: 100vh;
        }

        /* Label formatting when open */
        .tab input:checked+label {
            /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
            font-size: 1.25rem;
            /*.text-xl*/
            padding: 1.25rem;
            /*.p-5*/
            border-left-width: 2px;
            /*.border-l-2*/
            border-color: #6574cd;
            /*.border-indigo*/
            background-color: #f8fafc;
            /*.bg-gray-100 */
            color: #6574cd;
            /*.text-indigo*/
        }

        /* Icon */
        .tab label::after {
            float: right;
            right: 0;
            top: 0;
            display: block;
            width: 1.5em;
            height: 1.5em;
            line-height: 1.5;
            font-size: 1.25rem;
            text-align: center;
            -webkit-transition: all .35s;
            -o-transition: all .35s;
            transition: all .35s;
        }

        /* Icon formatting - closed */
        .tab input[type=checkbox]+label::after {
            content: "+";
            font-weight: bold;
            /*.font-bold*/
            border-width: 1px;
            /*.border*/
            border-radius: 9999px;
            /*.rounded-full */
            border-color: #b8c2cc;
            /*.border-grey*/
        }

        .tab input[type=radio]+label::after {
            content: "\25BE";
            font-weight: bold;
            /*.font-bold*/
            border-width: 1px;
            /*.border*/
            border-radius: 9999px;
            /*.rounded-full */
            border-color: #b8c2cc;
            /*.border-grey*/
        }

        /* Icon formatting - open */
        .tab input[type=checkbox]:checked+label::after {
            transform: rotate(315deg);
            background-color: #6574cd;
            /*.bg-indigo*/
            color: #f8fafc;
            /*.text-grey-lightest*/
        }

        .tab input[type=radio]:checked+label::after {
            transform: rotateX(180deg);
            background-color: #6574cd;
            /*.bg-indigo*/
            color: #f8fafc;
            /*.text-grey-lightest*/
        }
    </style>

    @role('teacher')

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="mt-5 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
        <form action="{{route('create.lesson',$program->getRouteKey())}}" method="POST">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <x-label for="">Your Lesson Name</x-label>
                    <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
                </div>

                <div>
                    <x-label for="">Date</x-label>
                    <input type="date" name="date" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="date" required>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <x-label for="">Time</x-label>
                    <input type="time" name="time" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="time" required>
                </div>

                <div>
                    <x-label for="">Note</x-label>
                    <input type="text" name="note" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Note">
                </div>
            </div>

            <x-success-button class="mt-3 ml-3">
                {{ __('Create') }}
            </x-success-button>
        </form>
    </div>

    @endrole

    <div class="w-full md:w-3/5 mx-auto p-8">
        <div class="shadow-md">
            @foreach($lesson as $lesson)
            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0 " id="{{$lesson->id}}" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="{{$lesson->id}}">
                    {{$lesson->name}}
                    <span class="ml-10">{{$lesson->date}} at {{$lesson->time}}</span>
                </label>

                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto,
                        explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati
                        soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.
                    </p>
                    <div class="">
                        <a href="">
                            <x-primary-button>
                                Lesson Room
                            </x-primary-button>
                        </a>

                        @can('update',$lesson)
                        <a href="{{route('update.lesson.view',$lesson->getRouteKey())}}">
                            <x-success-button>
                                Update
                            </x-success-button>
                        </a>
                        @endcan

                        @can('delete',$lesson)
                        <a href="{{route('delete.lesson',$lesson->getRouteKey())}}">
                            <x-danger-button>
                                Delete
                            </x-danger-button>
                        </a>
                        @endcan
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



</x-app-layout>
