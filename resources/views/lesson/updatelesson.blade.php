<x-app-layout>
 <!-- Validation Errors -->
 <x-auth-validation-errors class="mb-4" :errors="$errors" />

 <div class="mt-10 pt-8 pb-8 bg-yellow-100">
     create lesson
     <div class="px-4  max-w-3xl mx-auto space-y-6">
         <form action="{{route('update.lesson',$lesson->id)}}" method="POST">
             @csrf
             <div class="flex space-x-4">
                 <div class="w-1/2">
                     <x-label for="">Your Lesson Name</x-label>
                     <input type="text" name="name" value="{{$lesson->name}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
                 </div>

                 <div class="w-1/2 relative">
                     <x-label for="">Date</x-label>
                     <input type="date" name="date" value="{{$lesson->date}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="date" required>
                 </div>
             </div>

             <div class="flex space-x-4">
                 <div class="w-1/2 relative">
                     <x-label for="">Time</x-label>
                     <input type="time" name="time" value="{{$lesson->time}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="time" required>
                 </div>

                 <div class="w-1/2">
                     <x-label for="">Note</x-label>
                     <input type="text" name="note" value="{{$lesson->note}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Note">
                 </div>
             </div>

             <x-success-button class="mt-3 ml-3">
                 {{ __('Update') }}
             </x-success-button>
         </form>
         <a href="{{route('lesson',$lesson->program->id)}}">
            <x-success-button class="mt-3 ml-3">
                {{ __('Back') }}
            </x-success-button>
         </a>
     </div>
 </div>

</x-app-layout>
