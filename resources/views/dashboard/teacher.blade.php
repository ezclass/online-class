<x-app-layout>
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>

    <!-- Card code block start -->
    <div class="bg-white shadow rounded">
        <div class="relative">
            <img class="h-56 shadow rounded-t w-full object-cover object-center" src="{{ asset('storage/home/banner.jpg')}}" alt="" />
            <div class="inset-0 m-auto w-24 h-24 absolute bottom-0 -mb-12 xl:ml-10 rounded border-2 shadow border-white">
                <img class="w-full h-full overflow-hidden object-cover rounded" src="{{ asset('storage/avatar/'. Auth::User()->avatar )}}" alt="avatar" />
            </div>
        </div>
        <div class="px-5 xl:px-10 pb-10">
            <div class="flex justify-center xl:justify-end w-full pt-16 xl:pt-5">
                <div class="flex items-center">
                    <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                    <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                    <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                    <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                    <svg class="w-4 text-gray-200 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                </div>
            </div>
            <div class="pt-3 xl:pt-5 flex flex-col xl:flex-row items-start xl:items-center justify-between">
                <div class="xl:pr-16 w-full xl:w-2/3">
                    <div class="text-center xl:text-left mb-3 xl:mb-0 flex flex-col xl:flex-row items-center justify-between xl:justify-start">
                        <h2 class="mb-3 xl:mb-0 xl:mr-4 text-2xl text-gray-800 font-medium tracking-normal">
                            {{Auth::User()->name}}
                        </h2>
                    </div>
                    <p class="text-center xl:text-left mt-2 text-sm tracking-normal text-gray-600 leading-5">

                    </p>
                </div>
                <div class="xl:px-10 xl:border-l xl:border-r w-full py-5 flex items-start justify-center xl:w-1/3">
                    <div class="mr-6 xl:mr-10">
                        <h2 class="text-gray-600 font-bold text-xl xl:text-2xl leading-6 mb-2 text-center">
                            82
                        </h2>
                        <p class="text-gray-800 text-sm xl:text-xl leading-5">
                            Reviews
                        </p>
                    </div>
                    <div class="mr-6 xl:mr-10">
                        <h2 class="text-gray-600 font-bold text-xl xl:text-2xl leading-6 mb-2 text-center">
                            28
                        </h2>
                        <p class="text-gray-800 text-sm xl:text-xl leading-5">
                            Classes
                        </p>
                    </div>
                    <div>
                        <h2 class="text-gray-600 font-bold text-xl xl:text-2xl leading-6 mb-2 text-center">
                            42
                        </h2>
                        <p class="text-gray-800 text-sm xl:text-xl leading-5">
                            Students
                        </p>
                    </div>
                </div>
                <div class="w-full xl:w-2/3 flex-col md:flex-row justify-center xl:justify-end flex md:pl-6">
                    <div class="flex items-center justify-center xl:justify-start mt-1 md:mt-0 mb-5 md:mb-0">
                        <div class="rounded-full bg-gray-200 text-gray-600 text-sm px-6 py-2 flex justify-center items-center">
                            Remote
                        </div>
                        <div class="ml-5 rounded-full bg-green-200 text-green-500 text-sm px-6 py-2 flex justify-center items-center">
                            Available
                        </div>
                    </div>
                    <button class="focus:outline-none ml-0 md:ml-5 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-3 md:px-6 py-2 text-sm">
                        Message
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Card code block end -->

    <div class="bg-white">
        <nav class="tabs flex flex-col sm:flex-row">
            <button data-target="panel-1" class="tab text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none border-b-2 font-medium border-blue-500">
                Time Line
            </button>
            <button data-target="panel-2" class="tab text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                Create Class
            </button>
            <button data-target="panel-3" class="tab text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                All Classes
            </button>
        </nav>
    </div>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div id="panels">
        <div class="panel-1 tab-content active py-5">

            @role('teacher')
            <!--Container-->
            <div class="container w-full md:w-5/5 xl:w-5/5  mx-auto px-2">
                <!--Title-->
                <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
                    Enroll Request
                </h1>

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="table1" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead> {{Auth::user()->id}} <br>
                            <tr>
                                <th data-priority="1">Student Photo</th>
                                <th data-priority="1">Student Name</th>
                                <th data-priority="2">Class Name</th>
                                <th data-priority="3">Subject Name</th>
                                <th data-priority="5">Payment Date</th>
                                <th data-priority="4">Payment Policy</th>
                                <th data-priority="6">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($enrolRequest as $enroll)
                            @if($enroll->accepted_at == null)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/avatar/'. $enroll->student->avatar )}}" class="inline-block h-10 w-10 rounded-full ring-2 ring-white" alt="">
                                </td>
                                <td>{{$enroll->student->name}}</td>
                                <td>{{$enroll->program->name}}</td>
                                <td>{{$enroll->program->subject->name}}</td>
                                <form action="{{route('enroll.accept',$enroll->id)}}" method="POST">
                                    @csrf
                                    <td>
                                        <input type="radio" value="7" name="payment_date" class=""> first week <br>
                                        <input type="radio" value="14" name="payment_date"> Second week <br>
                                        <input type="radio" value="21" name="payment_date"> Therd week <br>
                                        <input type="radio" value="28" name="payment_date"> Last week <br>
                                    </td>
                                    <td>
                                        <input type="radio" value="0" name="payment_policy" class=""> Free Card <br>
                                        <input type="radio" value="50" name="payment_policy"> 50% Bonus <br>
                                        <input type="radio" value="100" name="payment_policy"> Normel Price <br>
                                    </td>
                                    <td>
                                        <x-success-button class="ml-3 mt-5">
                                            {{ __('Accept') }}
                                        </x-success-button>
                                    </td>
                                </form>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--/Card-->

            </div>
            <!--/container-->
            @endrole

            @role('teacher')
            <!--Container-->
            <div class="container w-full md:w-5/5 xl:w-5/5  mx-auto px-2">
                <!--Title-->
                <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
                    Enrollded
                </h1>

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="table2" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">Student Photo</th>
                                <th data-priority="1">Student Name</th>
                                <th data-priority="2">Class Name</th>
                                <th data-priority="3">Subject Name</th>
                                <th data-priority="5">Payment Date</th>
                                <th data-priority="4">Payment Policy</th>
                                <th data-priority="6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enrolRequest as $enroll)
                            @if($enroll->accepted_at != null)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/avatar/'. $enroll->student->avatar )}}" class="inline-block h-10 w-10 rounded-full ring-2 ring-white" alt="">
                                </td>
                                <td>{{$enroll->student->name}}</td>
                                <td>{{$enroll->program->name}}</td>
                                <td>{{$enroll->program->subject->name}}</td>
                                <form action="{{route('enroll.accept',$enroll->id)}}" method="POST">
                                    @csrf
                                    <td>
                                        <input type="radio" value="7" name="payment_date" class=""> first week <br>
                                        <input type="radio" value="14" name="payment_date"> Second week <br>
                                        <input type="radio" value="21" name="payment_date"> Therd week <br>
                                        <input type="radio" value="28" name="payment_date"> Last week <br>
                                    </td>
                                    <td>
                                        <input type="radio" value="0" name="payment_policy" class=""> Free Card <br>
                                        <input type="radio" value="50" name="payment_policy"> 50% Bonus <br>
                                        <input type="radio" value="100" name="payment_policy"> Normel Price <br>
                                    </td>
                                    <td>
                                        <x-warning-button class="ml-3 mt-5">
                                            {{ __('Update') }}
                                        </x-warning-button>
                                    </td>
                                </form>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--/Card-->

            </div>
            <!--/container-->
            @endrole

        </div>
        <div class="panel-2 tab-content py-5">
            @role('teacher')
            <div class="mt-10 pt-8 pb-8 bg-yellow-100">
                <div class="px-4  max-w-3xl mx-auto space-y-6">
                    <form action="{{route('create.class')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- <input type="hidden" name="user_id" value="{{Auth::User()->id}}"> --}}

                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <x-label for="">Your Class Name</x-label>
                                <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
                            </div>
                            <div class="w-1/2">
                                <x-label for="">Select Grade/Year:</x-label>
                                <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="grade_id" name="grade_id" onchange="random_function3()" required>
                                    <option selected disabled>Grade/Year</option>
                                    @foreach($grade as $grd)
                                    <option value="{{$grd->id}}">{{$grd->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>

                        <div class="flex space-x-4">
                            <div class="w-1/2 relative">
                                <x-label for="">Select Meadiam</x-label>
                                <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="language_id" name="language_id" onchange="random_function()" required>
                                    <option selected disabled>Meadiam</option>
                                    @foreach($language as $lan)
                                    <option value="{{$lan->id}}">{{$lan->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-1/2">
                                <x-label for="">Select Subject</x-label>
                                <select id="subject_id" name="subject_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                                    <option selected disabled>Subject</option>
                                    @foreach($subject as $sub)
                                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <x-label class="">Class fees for the month</x-label>
                                <input type="number" name="fees" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500 @error('fees') is-invalid @enderror">
                            </div>

                            <div class="w-1/2">
                                <x-label class="">Class Image</x-label>
                                <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500 @error('class_image') is-invalid @enderror">
                            </div>
                        </div>

                        <x-success-button class="ml-3 mt-5">
                            {{ __('Create') }}
                        </x-success-button>
                    </form>
                </div>
            </div>
            @endrole
        </div>
        <div class="panel-3 tab-content py-5">
            @foreach($program as $class)
            <div class="hover:bg-gray-100 m-7 max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
                <div class="sm:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/class_image/'.$class->image)}}" alt="Man looking at item at a store">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">{{ $class->name }}</div>
                        <div class="block mt-1 text-lg leading-tight font-medium text-black">{{ $class->grade->name }}</div>
                        <p class="mt-2 text-gray-500">{{ $class->subject->name }}</p>
                        <p>{{ $class->language->name }}</p>
                        <p>
                        <div class="mt-2 flex space-x-4">
                            <a href="{{route('lesson',$class->id)}}">
                                <x-primary-button>
                                    Lesson
                                </x-primary-button>
                            </a>
                            <a href="{{route('update.program.view',$class->id)}}">
                                <x-success-button>
                                    Update
                                </x-success-button>
                            </a>

                            <a href="{{route('delete.program', $class->id)}}">
                                <x-danger-button class="">
                                    Delete
                                </x-danger-button>
                            </a>

                        </div>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script>
        const tabs = document.querySelectorAll(".tabs");
        const tab = document.querySelectorAll(".tab");
        const panel = document.querySelectorAll(".tab-content");

        function onTabClick(event) {
            // deactivate existing active tabs and panel
            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active");
            }

            for (let i = 0; i < panel.length; i++) {
                panel[i].classList.remove("active");
            }

            // activate new tabs and panel
            event.target.classList.add('active');
            let classString = event.target.getAttribute('data-target');
            console.log(classString);
            document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
        }

        for (let i = 0; i < tab.length; i++) {
            tab[i].addEventListener('click', onTabClick, false);
        }


        $(document).ready(function() {

            var table = $('#table1').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });

        $(document).ready(function() {

            var table = $('#table2').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</x-app-layout>
