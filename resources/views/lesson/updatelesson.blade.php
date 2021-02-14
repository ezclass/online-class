<x-app-layout>
    
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

     <div class="mt-5 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
         <form action="{{route('lesson.update',$lesson->getRouteKey())}}" method="POST">
             @csrf
             <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                 <div>
                     <x-label for="">Your Lesson Name</x-label>
                     <input type="text" name="name" value="{{$lesson->name}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                 </div>

                 <div>
                     <x-label for="">Start at</x-label>
                     <input type="datetime" name="starts_at" value="{{$lesson->starts_at}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                 </div>
             </div>

             <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                 <div>
                     <x-label for="">End at</x-label>
                     <input type="datetime" name="ends_at" value="{{$lesson->ends_at}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                 </div>

                 <div>
                     <x-label for="">Note</x-label>
                     <input type="text" name="note" value="{{$lesson->note}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
                 </div>
             </div>

             <x-success-button class="mt-3 ml-3">
                {{ __('Update') }}
            </x-success-button>
         </form>
     </div>

</x-app-layout>
