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

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div id="panels">
        <div class="panel-1 tab-content active py-5">
            <x-enrolment-request />

            <x-enrolled-student />
        </div>

        <div class="panel-2 tab-content py-5">
            <x-create-program />
        </div>
        <div class="panel-3 tab-content py-5">
            @foreach($programs as $program)
            <div class="hover:bg-gray-100 m-7 max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
                <div class="sm:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/class_image/'.$program->image)}}" alt="Man looking at item at a store">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">{{ $program->name }}</div>
                        <div class="block mt-1 text-lg leading-tight font-medium text-black">{{ $program->grade->name }}</div>
                        <p class="mt-2 text-gray-500">{{ $program->subject->name }}</p>
                        <p>{{ $program->language->name }}</p>
                        <p>
                        <div class="mt-2 flex space-x-4">
                            <a href="{{route('lesson',$program->getRouteKey())}}">
                                <x-primary-button>
                                    Lesson
                                </x-primary-button>
                            </a>
                            <a href="{{route('update.program.view',$program->getRouteKey())}}">
                                <x-success-button>
                                    Update
                                </x-success-button>
                            </a>

                            <a href="{{route('delete.program', $program->getRouteKey())}}">
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
