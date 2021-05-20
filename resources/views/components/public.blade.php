 <!-- component -->
 <style>
     :root {
         --main-color: #4a76a8;
     }

     .bg-main-color {
         background-color: var(--main-color);
     }

     .text-main-color {
         color: var(--main-color);
     }

     .border-main-color {
         border-color: var(--main-color);
     }
 </style>

 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

 <div class="container mx-auto my-5 p-5">
     <div class="md:flex no-wrap md:-mx-2 ">
         <div class="w-full md:w-2/12 md:mx-2">
             <div class="bg-white p-3 border-t-4 border-green-400">
                 <div class="image overflow-hidden">
                     <img class="h-auto w-full mx-auto" src="{{ Storage::disk('do')->url('avatar/'. $teacher->avatar )}}" alt="">
                 </div>
                 <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$teacher->name}}</h1>
             </div>
         </div>

         <div class="md:w-10/12 mx-2 h-64">

             {{-- <div class="bg-white p-3 shadow-sm rounded-sm">
                 <div class="text-gray-700">
                     <div class="grid md:grid-cols-2 text-sm">
                         <div class="grid lg:grid-cols-2">
                             <div class="px-4 py-2 font-semibold">Contact No.</div>
                             <span class="px-4 py-2">{{$teacher->phone_number}}</span>
                         </div>
                         <div class="grid lg:grid-cols-2">
                             <div class="px-4 py-2 font-semibold">Email.</div>
                             <div class="px-4 py-2">
                                 <span class="text-blue-800">{{$teacher->email}}</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> --}}

             <div class="my-4"></div>

             <div class="bg-white p-3 shadow-sm rounded-sm">
                 <div class="grid lg:grid-cols-2">
                     <div>
                         <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                             <span clas="text-green-500">
                                 <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                 </svg>
                             </span>
                             <span class="tracking-wide">Experience</span>
                         </div>
                         <ul class="list-inside space-y-2">
                             <li>
                                 <div class="text-teal-600">{{$teacher->experience}}</div>
                             </li>
                         </ul>
                     </div>
                     <div>
                         <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                             <span clas="text-green-500">
                                 <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                     <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                     <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                 </svg>
                             </span>
                             <span class="tracking-wide">Education</span>
                         </div>
                         <ul class="list-inside space-y-2">
                             <li>
                                 <div class="text-teal-600">{{$teacher->education}}</div>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="my-4 mt-64 lg:mt-0 md:mt-0"></div>

     <div class="holder mx-auto w-11/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
         @forelse($programs as $program)
         <x-program-card :program="$program" />
         @empty
         @role('teacher')
         <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
             <span class="block sm:inline text-yellow-700">No classes yet, Click <a href="{{route('create.program.viwe')}}"><u>Create a new class</u></a></span>
         </div>
         @endrole
         @role('student')
         <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
             <span class="block sm:inline text-yellow-700">No classes yet</span>
         </div>
         @endrole
         @endforelse
     </div>
 </div>
